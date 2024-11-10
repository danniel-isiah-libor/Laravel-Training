<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
            // 'user_id' =>['required', 'numeric', 'exists:users.id']
            'name' => ['required', 'string','max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', 'min:3', 'max:12'],
        ];
    }

    public function messages(){
        return[
            'name.required' => 'This is a custom message',
            'email.required' => 'You should insert your email.'
        ];
    }

    // protected function prepareForValidation(){
    //     // gagawin nya papasok muna sa prepare for validation bago dumaan sa rules
    //     // $this->merge(['user_id' => 1]);
    // }

    // protected function failedValidation(Validator $validator)
    // {
        
    // }
}
