<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugOutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_drug_in' => 'required|numeric',
            'id_people_receiver' => 'required|numeric',
            'quantity_out' => 'required|max:20|string',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório'
        ];
    }
}
