<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'is_published' => 'nullable|boolean',
            'category_id' => 'required|integer',
            'tags' => 'required|array',
            'tags.*' => 'required|integer|exists:tags,id',
            'colors' => 'required|array',
            'colors.*' => 'required|integer|exists:colors,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'description.required' => 'Это поле необходимо заполнить',
            'content.required' => 'Это поле необходимо заполнить',
            'preview_image.required' => 'Это поле необходимо заполнить',
            'preview_image.image' => 'Необходимо выбрать файл формата: jpeg, png, jpg, gif, svg',
            'price.required' => 'Это поле необходимо заполнить',
            'price.integer' => 'Цена должна быть в виде числа',
            'count.required' => 'Это поле необходимо заполнить',
            'count.required' => 'Количество должно быть в виде числа',
            'category_id.required' => 'Выберите категорию',
            'tags.required' => 'Выберите теги',
            'tags.array' => 'Выберите теги',
            'colors.required' => 'Выберите цвет',
            'colors.array' => 'Выберите цвет',
        ];
    }
}
