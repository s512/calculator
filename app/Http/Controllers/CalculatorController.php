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

    public function answer(CalculateRequest $request): \Illuminate\Http\JsonResponse
    {
        $operator = Operator::from($request->operator)->operatorInstance();
        $calculator = new Calculator($operator);
        $answer = $calculator->calculate((float)$request->a, (float)$request->b);

        return response()->json(['answer' => $answer]);
    }
}
