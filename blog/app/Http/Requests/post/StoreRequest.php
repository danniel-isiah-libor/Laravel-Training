<?php

namespace App\Http\Requests\post;

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
            "user_id"=>[
                "required",
                "numeric",
                "exists:users,id"
            ],
            "title"=>[
                "required",
                "string",
                "max:255"
            ],
            "body"=>[
                "required",
                "string"
            ]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id"=>Auth::user()->id
        ]);
    }
}
