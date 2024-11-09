<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' =>
            [
                'required',
                'string',
                'email',
                'max:255'
                //, 'unique:users,email'
            ],
            'password' =>
            [
                'required',
                'confirmed',
                'string',
                'max:255',
                'min:8',
                Password::min(8)
                    ->max(20)
                    ->mixedCase()
                    ->symbols()
                    ->numbers()
                    ->uncompromised()
            ]
            //
        ];
    }
}
