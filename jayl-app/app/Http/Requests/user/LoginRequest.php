<?php

namespace App\Http\Requests\user;

use App\Rules\LoginRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
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

            'email' =>
            [
                'required',
                'string',
                'email',
                new LoginRule
                //, 'unique:users,email'
            ],
            'password' =>
            [
                'required'
            ]
            //
        ];
    }
}
