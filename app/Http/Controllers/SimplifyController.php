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

        return view('simplify', [
            'expression' => request('expression'),
            'simplified' => Math::from(request('expression'))->simplify()->string(),
        ]);
    }
}
