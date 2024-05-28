<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required|email',
            'message' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array {
        return [
            'first_name.required' => 'The first name field is required',
            'last_name.required' => 'The last name field is required',
            'email.required' => 'The email field is required',
            'email.email' => 'The is not an email',
            'message.string' => 'You can sent chars only',
        ];
    }
}


