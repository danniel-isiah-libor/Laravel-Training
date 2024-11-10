<?php

namespace App\Http\Requests\User;

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
            'email' => [
                'required',
                'email',
                'max:255',
                new LoginRule
            ],
            'password' => [
                'required',
                //'string',
                //'min:8',
                //'max:12',
                //'confirmed',
                // Password::min(8)
                // ->mixedCase()
                // ->symbols()
                // ->numbers()
                // ->uncompromised()
            ],
        ];
    }

}
