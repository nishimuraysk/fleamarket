<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'image' => 'required|string',
            'category_id' => 'required',
            'condition_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|integer|between:1,9999999',
        ];
    }

    public function messages()
    {
        return [
            'image' => '必ず入力してください。',
            'category_id' => '選択肢から選択してください。',
            'condition_id' => '選択肢から選択してください。',
            'name' => '必ず入力してください。',
            'description' => '必ず入力してください。',
            'price' => '1〜999万円の整数で入力してください。',
        ];
    }
}
