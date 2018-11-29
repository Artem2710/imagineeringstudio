<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 28.11.2018
 * Time: 13:41
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required|',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.'
        ];
    }
}