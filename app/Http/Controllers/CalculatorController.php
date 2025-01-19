<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class CalculatorController extends Controller
{
    /**
     * Return the calculator view
     *
     */
    public function show(): \Illuminate\Contracts\View\View
    {
        return view('calculator');
    }
}
