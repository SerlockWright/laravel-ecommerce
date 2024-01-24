<?php

namespace App\Http\Requests;

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
            'name' => ['required','alpha_num','min:6','max:15'],
            'email' =>['required', 'email'],
            'password' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please input username!!!',
            'name.alpha_num' => 'Name must be alphanumeric!!!',
            'name.min' => 'Name must be at least 6 characters!!!',
            'name.max' => 'Name must be at most 15 characters!!!',
            'email.required' => 'Please input email!!!',
            'email.email' => 'Email must be valid!!!',
            'password.required' => 'Please input password!!!'
        ];
    }
}
