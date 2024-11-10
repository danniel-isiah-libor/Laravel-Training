<?php

namespace App\Http\Requests\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
        //return Auth::check();
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
            "name"=>[
                "required",
                "string",
                "max:255"
            ],
            "email"=>[
                "required",
                "string",
                "email",
                "max:255"
            ],
            "password"=>[
                "required",
                "confirmed",
                Password::min(8)
                ->max(12)
                ->mixedCase()
                ->symbols()
                ->numbers()
                ->uncompromised()
            ]
        ];
    }
}
