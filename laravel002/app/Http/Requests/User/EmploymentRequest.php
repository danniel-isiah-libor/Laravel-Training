<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class EmploymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'company_name' => [
                'required',
                'string',
                'max:255'
            ],
            'start_year' => [
                'required'

            ],
            'end_year' => [
                'after:start_year',
                'nullable'
            ],
            'position' => [
                'required',
                'string',
                'max:255'
            ]
        ];

        if(request()->filled('end_year')) {
            $rules['start_year'][] = 'before:end_year';
        }

        return $rules;
    }
}
