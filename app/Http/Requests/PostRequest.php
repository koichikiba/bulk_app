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
            'memo' => 'required|string|max:2000',
            'category_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'event' => '種目',
            'menu' => 'セット・重量・レップ',
            'category_id' => '部位'
        ];
    }
}
