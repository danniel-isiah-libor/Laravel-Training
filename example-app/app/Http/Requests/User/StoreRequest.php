<?php

namespace App\Http\Requests\User;
use Illuminate\Validation\Rules\Password;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return true;
        return !!Auth::check();
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
                'max:255', 
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                // 'unique:users,email'
            ],
            'password' => [
                'required',
                'confirmed',
                // 'min:8',
                // 'max:12',
                Password::min(8)
                ->max(12)
                ->mixedCase()
                ->symbols()
                ->numbers()
                // ->uncompromised()
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required BAWAL.',
            // 'name.string' => 'The name field must be a string.',
            // 'name.max' => 'The name field may not be greater than 255 characters.',

            // 'email.required' => 'The email field is required.',
            // 'email.string' => 'The email field must be a string.',
            // 'email.email' => 'The email field must be a valid email address.',
            // 'email.max' => 'The email field may not be greater than 255 characters.',
            // // 'email.unique' => 'The email has already been taken.',

            // 'password.required' => 'The password field is required.',
            // 'password.confirmed' => 'The password and confirmation password do not match.',
            // 'password.min' => 'The password must be at least 8 characters.',
        ];
    }

    
}
