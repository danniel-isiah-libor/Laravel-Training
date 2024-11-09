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
                'max:99'
                //'nullable /* for optional field */
                //'unique:users,name' /* make sure that this is only name is db */
                //'exists:user,name' /* check if existing in db */
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255'
                //'unique:users,email' /* make sure no one use this email */
            ],
            'password' => [
                'required',
                'confirmed',
                //'min:8',
                //'max:16',
                Password::min(8)
                ->max(16)
                ->mixedCase()
                ->symbols()
                ->numbers()
                ->uncompromised()
            ]
        ];
    }
}
