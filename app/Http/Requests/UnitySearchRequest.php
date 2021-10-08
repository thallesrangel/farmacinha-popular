<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitySearchRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'state_id' => 'required|numeric',
            'city_id' => 'required|numeric',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'numeric' => 'Precisa ser um número',
        ];
    }
}
