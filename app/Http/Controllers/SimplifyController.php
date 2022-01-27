<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use MathSolver\Math;
use Throwable;

class SimplifyController
{
    public function __invoke(): View|RedirectResponse
    {
        if (empty(request('expression'))) {
            return redirect()->route('home');
        }

        try {
            $expression = Math::from(request('expression'))->mathjax();
            $simplified = Math::from(request('expression'))->simplify()->mathjax();
        } catch (Throwable $exception) {
            return view('simplify', [
                'raw' => request('expression'),
                'expression' => request('expression'),
                'simplified' => 'error',
            ]);
        }

        return view('simplify', [
            'raw' => request('expression'),
            'expression' => $expression,
            'simplified' => $simplified,
        ]);
    }
}
