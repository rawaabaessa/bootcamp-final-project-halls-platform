<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name' => 'required|string|min:10|max:250',
            'email' => 'required|email|max:250|unique:users',
            'phone' => 'required|integer|min:9|max:8|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'name.string' => 'قيمة غير صالحة',
            'name.min' => 'يجب ان يتجاوز 10 احرف',
            'name.max' => 'يجب ان لا يتجاوز 250 حرف',
            'email.required' => 'هذا الحقل مطلوب',
            'email.email' => 'قيمة غير صالحة',
            'email.unique' => 'الايميل موجود مسبقا',
            'email.max' => 'يجب ان لا يتجاوز 250 حرف',
            'phone.required' => 'هذا الحقل مطلوب',
            'phone.integer' => 'قيمة غير صالحة',
            'phone.min' => 'يجب ان لا يقل عن 9 ارقام',
            'phone.max' => 'يجب ان لا يتجاوز 9 ارقام',
            'phone.unique' => 'الهاتف موجود مسبقا',
            'password.required' => 'هذا الحقل مطلوب',
            'password.min' => 'يجب ان لا يقل عن 6 احرف',
            'password.confirmed' => 'كلمة السر غير متطابقة',
            'role' => 'هذا الحقل مطلوب'
        ];
    }
}
