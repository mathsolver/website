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
            return redirect()->route('home');
        }

        $expression = Math::from(request('expression'))->config(['mathjax' => true])->string();
        $math = Math::from(request('expression'))->config(['steps' => true, 'mathjax' => true])->simplify();

        return view('simplify', [
            'raw' => request('expression'),
            'expression' => $expression,
            'simplified' => $math->string()['result'],
            'steps' => $math->string()['steps'],
        ]);
    }
}
