<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'event' => 'required|string|max:50',
            'menu' => 'required|string|max:2000',
            'category_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'event' => '種目',
            'menu' => 'メニュー',
            'category_id' => '部位'
        ];
    }
}
