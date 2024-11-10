<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class WorkRegister extends FormRequest
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
            'Company' => [
                'required',
                'string',
                'max:255'
            ],
            'StartDate' => [
                'required',
                'date',

            ],
            'EndDate' => [

                'date',
                'after:StartDate',
                'nullable'
            ],
            'Position' => [
                'required'
            ],
        ];

        if (request()->filled('EndDate')) {
            $rules['StartDate'][] = 'before:EndDate';
        }


        return $rules;
    }
}
