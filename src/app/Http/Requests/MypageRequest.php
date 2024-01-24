<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MypageRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'image' => 'required|string',
            'postcode' => 'required|string|max:8',
            'address' => 'required|string|max:255',
            'building' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'ユーザー名は255文字以内で必ず入力してください。',
            'image' => 'プロフィール画像は必ず入力してください。',
            'postcode' => '郵便番号は8文字以内で必ず入力してください。',
            'address' => '住所は255文字以内で必ず入力してください。',
            'building' => '建物名は255文字以内で必ず入力してください。',
        ];
    }
}
