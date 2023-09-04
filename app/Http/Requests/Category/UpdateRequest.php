<?php

namespace App\Http\Requests\Category;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'name' => 'required|string|max:50|unique:categories',
            // 'name' => [
            //     'required',
            //     'max:50',
            //     Rule::unique('categories')->ignore($category)
            // ],

            'name' => [
            'required',
            'max:50',
            Rule::unique('categories')
           ],

        ];
    }
}