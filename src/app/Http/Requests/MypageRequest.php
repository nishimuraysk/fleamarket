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
            'postcode' => 'required|string|max:8|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required|string|max:255',
            'building' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name' => '必ず入力してください。',
            'postcode' => 'ハイフンを入れて正しく入力してください。',
            'address' => '正しく入力してください。',
            'building' => '正しく入力してください。',
        ];
    }
}
