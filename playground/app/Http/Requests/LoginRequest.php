<?php

namespace App\Http\Requests;

use App\Rules\LoginRule;
use Illuminate\Foundation\Http\FormRequest;

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
            //isang log in rule lang per requirement
            'email' => ['required', 'string', 'email', new LoginRule],
            'password' => ['required','min:3', 'max:12'],
        ];
    }
}
