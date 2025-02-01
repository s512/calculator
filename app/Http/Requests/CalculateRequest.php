<?php

namespace App\Http\Requests;

use App\Enums\Operator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CalculateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'input_a' => 'required|numeric',
            'input_b' => 'required|numeric',
            'operator' => [
                Rule::enum(Operator::class)
            ]
        ];

        return $rules;
    }
}
