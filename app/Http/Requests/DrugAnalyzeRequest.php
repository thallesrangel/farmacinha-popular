<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugAnalyzeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'conservation' => 'required',
            'expiration_date' => 'required',
            'analyze_result' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
        ];
    }
}
