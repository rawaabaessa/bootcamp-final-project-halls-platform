<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinRequest extends FormRequest
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
            'name' => 'required|string|max:50|min:3|unique:facilities',
            'title' => 'required|string|max:50|min:3|unique:facilities',
            'email' => 'required|email|unique:users',
            'address' => 'required|min:5',
            'phone' => 'required|integer|min:9',
            'license' => 'required',
            'governorate' => 'required',
            'Directorate' => 'required',
            'identity-NO' => 'required|integer|min:15|max:15'
        ];
    }
    public function messages(){
        return [
            'name.required' => ' .الحقل مطلوب',
            'name.string' => '.القيمة غير صالحة',
            'name.max' => '.يجب ان لا يتجاوز50 حرف',
            'name.min' => '.يجب ان لا يقل عن 3 احرف',
            'name.unique' => '.الاسم موجود مسبقا',
    
            'title.required' => ' .الحقل مطلوب',
            'title.string' => '.القيمة غير صالحة',
            'title.max' => '.يجب ان لا يتجاوز50 حرف',
            'title.min' => '.يجب ان لا يقل عن 3 احرف',
            'title.unique' => '.الاسم موجود مسبقا',
    
            'email.required' => ' .الحقل مطلوب',
            'email.unique' => '.الاسم موجود مسبقا',
            'email.email' => '.القيمة غير صالحة',
    
            'address.required' => ' .الحقل مطلوب',
            'address.min' => ' .يجب ان لا يقل عن 5 احرف',
    
            'phone.required' => ' .الحقل مطلوب',
            'phone.integer' => '.القيمة غير صالحة',
            'phone.min' =>  ' .يجب ان لا يقل عن 9 ارقام',
    
            'license.required' => ' .الحقل مطلوب',
            'governorate.required' => ' .الحقل مطلوب',
            'directorate.required' => ' .الحقل مطلوب',
    
            'identity-NO.required' => ' .الحقل مطلوب',
            'identity-NO.integer' => '.القيمة غير صالحة',
            'identity-NO.min' => ' .يجب ان لا يقل عن 15 حرف',
            'identity-NO.max' => ' .يجب ان لا يتجاوز  15 حرف',
        ];

    }
}
