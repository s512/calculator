<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('calculator');
});

Route::get('/calculator', [CalculatorController::class, 'show'])->name('calculator');

Route::group(['prefix' => 'api'], function () {
    Route::post('/calculate', [CalculatorController::class, 'answer'])->name('calculator.calculate');
});
