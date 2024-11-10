<?php

namespace App\Http\Requests\User;

use App\Exceptions\CustomValidateException;
use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            // 'user_id' => [
            //     'required',
            //     'numeric',
            //     // 'exists:users,id'
            // ],
            'name' => [
                'required',
                'string',
                'max:255'
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
                Password::min(8)
                    ->max(12)
                    ->mixedCase()
                    ->symbols()
                    ->numbers()
                    ->uncompromised()
            ]
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'This is a custom message',
    //         'password.confirmed' => 'Wrong password'
    //     ];
    // }

    // protected function prepareForValidation()
    // {
    //     // $request->merge();
    //     $this->merge(['user_id' => 1]);
    // }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new CustomValidateException();
    // }
}
