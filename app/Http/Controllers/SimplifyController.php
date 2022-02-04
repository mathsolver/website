<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use MathSolver\Math;

class SimplifyController
{
    public function __invoke(): View|RedirectResponse
    {
        if (empty(request('expression'))) {
            return redirect()->route('input');
        }

        $math = Math::from(request('expression'))->config(['steps' => true, 'mathjax' => true])->simplify();

        if (request('substitutions')) {
            $substitutions = collect(json_decode(request('substitutions')))
                ->mapWithKeys(fn ($item) => [$item->search => $item->replace])
                ->filter()
                ->toArray();

            if (count($substitutions) > 0) {
                $math = $math->substitute($substitutions)->simplify();
            }
        }

        if (request('solve')) {
            $math = $math->solveFor(request('solve'));
        }

        return view('simplify', [
            'raw' => request('expression'),
            'expression' => Math::from(request('expression'))->config(['mathjax' => true])->string(),
            'simplified' => $math->string()['result'],
            'steps' => $math->string()['steps'],
        ]);
    }
}
