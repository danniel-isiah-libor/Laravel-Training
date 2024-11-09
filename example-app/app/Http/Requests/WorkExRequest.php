<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkExRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company' => [
                'required',
                'string'
            ],
            'start_date' => [
                'required',
                'date',
                'before:end_date'
            ],
            'end_date' => [
                'date',
                'after:start_date',
            ],
            'role' => [
                'required',
                'string'
            ],
        ];
    }
}
