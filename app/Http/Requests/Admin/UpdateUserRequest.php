<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->route('user')->id)],
            'password' => 'nullable|string|min:8',
            'country_code' => 'required|string|regex:/^\+\d{1,4}$/',
            'phone' => 'required|string|regex:/^\d{1,20}$/',
            'is_admin' => 'required|boolean',
        ];
    }
}
