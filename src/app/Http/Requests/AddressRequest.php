<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'postcode' => 'required|string|max:8',
            'address' => 'required|string|max:255',
            'building' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'postcode' => '郵便番号は8文字以内で必ず入力してください。',
            'address' => '住所は255文字以内で必ず入力してください。',
            'building' => '建物名は255文字以内で必ず入力してください。',
        ];
    }
}
