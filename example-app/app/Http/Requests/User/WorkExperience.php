<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class WorkExperience extends FormRequest
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
            'company' =>'required|string|max:255',
            'dataStart' =>'required|string|before:dataEnd|max:255', 
            'dataEnd' => 'nullable|date|after:dataStart',
            'role' => 'nullable|string|max:255',
        ];
    }
}
