<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
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
            'sus' => 'unique:people|max:30',
            'cpf' => 'required|unique:people',
            'states' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'first_name.max' => 'Tamanho máximo de 30 caracteres',
            'last_name.max' => 'Tamanho máximo de 30 caracteres',
            'states.max' => 'Tamanho máximo de 2 caracteres',
            'cpf.unique' => 'CPF já registrado',
            'sus.unique' => 'SUS já registrado',
        ];
    }
}
