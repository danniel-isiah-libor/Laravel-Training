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
        $rules = [
            'company' => [
                'required',
                'string',
                'max:255'
            ],
            'start_date' => [
                'required',
                'string',
            ],
            'end_date' => [
                'string',
                'after:start_date',
                'nullable',
            ],
            'role' => [
                'required',
                'string',
                'max:255'
            ]
        ];

        if (request()->filled('end_date')) {
            $rules['start_date'][] = 'before:end_date';
        }

        dd($rules);

        return $rules;
    }
}
