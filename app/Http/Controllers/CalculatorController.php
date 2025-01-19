<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\Operator;
use App\Http\Requests\CalculateRequest;
use App\Services\Calculator;

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

    /**
     * Get the answer and return as JSON
     */
    public function answer(CalculateRequest $request): \Illuminate\Http\JsonResponse
    {
        $operator = Operator::from($request->operator)->operatorInstance();
        $calculator = new Calculator($operator);
        $answer = $calculator->calculate((float)$request->input_a, (float)$request->input_b);

        return response()->json(['answer' => $answer]);
    }
}
