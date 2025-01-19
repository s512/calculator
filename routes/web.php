<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', [CalculatorController::class, 'show'])->name('calculator');

Route::group(['prefix' => 'api'], function () {
    Route::post('/calculator', [CalculatorController::class, 'answer'])->name('calculator.calculate');
});
