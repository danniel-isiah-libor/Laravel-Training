<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->post->user_id === Auth::user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "user_id"=> [
                "required",
                "numeric",
                "exists:users,id"
            ],
            "title"=> [
                "required",
                "string",
                "max:255"
            ],
            "title"=> [
                "required",
                "string",
                "max:1000"
            ],

        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => Auth::user()->id
        ]);
    }
}
