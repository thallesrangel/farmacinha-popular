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
            'states' => 'required|max:2',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'corporate_name.max' => 'Tamanho máximo de 70 caracteres',
            'cnes.max' => 'Tamanho máximo de 20 caracteres',
            'states.max' => 'Tamanho máximo de 2 caracteres'
        ];
    }
}
