<?php

namespace App\Http\Requests\Admin\Mountain;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|unique:mountains,name',
            'height' => 'required|numeric',
            'image' => 'required|mimes:png,jpg,bmp,jpeg',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'vui lòng nhập tên sản phẩm',
            'name.unique' => 'tên sản phẩm đã tồn tại',
            'height.required' => 'vui lòng nhập độ cao của núi',
            'height.numeric' => 'độ cao phải là số',
            'image.required' => 'vui lòng chọn hình',
            'image.mimes' => 'hình phải có đuôi (png,jpg,bmp,jpeg)',

        ];
    }
}
