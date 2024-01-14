<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reservationRequest extends FormRequest
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
            'duration' => 'required',
            'date' => 'required',
            'poeple' => 'required',
            'occasions' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'duration.required' => 'هذا الحقل مطلوب',
            'date.required' => 'هذا الحقل مطلوب',
            'poeple.required' => 'هذا الحقل مطلوب',
            'occasions.required' => 'هذا الحقل مطلوب',
        ];
    }
}
