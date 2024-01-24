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
            'price' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'image' => '商品画像は必ず入力してください。',
            'category_id' => 'カテゴリは選択肢から選択してください。',
            'condition_id' => '商品の状態は選択肢から選択してください。',
            'name' => '商品名は255文字以内で必ず入力してください。',
            'description' => '商品説明は255文字以内で必ず入力してください。',
            'price' => '販売価格は数値で必ず入力してください。',
        ];
    }
}
