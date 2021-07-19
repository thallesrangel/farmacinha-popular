<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnityRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'corporate_name' => 'required|max:100|string',
            'cnes' => 'required|max:50',
            'states' => 'required|max:2',
        ];
    }
}