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
            'corporate_name' => 'required|max:70|string',
            'cnes' => 'required|max:20|string',
            'state_id' => 'required|numeric',
            'city_id' => 'required|numeric',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'numeric' => 'Precisa ser um número',
            'corporate_name.max' => 'Tamanho máximo de 70 caracteres',
            'cnes.max' => 'Tamanho máximo de 20 caracteres',
        ];
    }
}
