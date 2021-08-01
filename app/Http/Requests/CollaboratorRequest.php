<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollaboratorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|max:30|string',
            'last_name' => 'required|max:30|string',
            'cpf' => 'required',
            'email' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'first_name.max' => 'Tamanho máximo de 70 caracteres',
            'states.max' => 'Tamanho máximo de 2 caracteres'
        ];
    }
}
