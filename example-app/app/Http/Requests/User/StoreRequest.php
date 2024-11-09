<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true; //pansamantagal
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255'
                // ,'alpha' // no numbers
                // ,'nullable' //optional
                // ,'unique:users,name' //(rules, table name, column name) check if walang katulad.
                // ,'exist:users,name' //(rules, table name, column name) check if existing
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                // ,'unique:users,name' //(rules, table name, column name) check if walang katulad.
            ],
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                ->max(12)
                ->mixedCase()
                ->symbols()
                ->numbers()
                // ->uncompromised()
            ]
        ];
    }
}
