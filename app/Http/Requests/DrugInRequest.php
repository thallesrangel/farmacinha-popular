<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugInRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:40|string',
            'id_drug_type' => 'required|numeric',
            'id_laboratory' => 'required|numeric',
            'id_stripe' => 'required|numeric',
            'id_measurement' => 'required|numeric',
            'expiration_date' => 'required|date',
            'amount' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'numeric' => 'Campo deve ser numérico',
            'name.max' => 'Deve ter no máximo 40 caractéres',
            'date'=> 'Deve ser uma data válida'
        ];
    }
}
