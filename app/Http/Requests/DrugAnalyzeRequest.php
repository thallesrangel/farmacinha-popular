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
            'confirm_laboratory' => 'required|string',
            'confirm_originality' => 'required|string',
            'conservation' => 'required|string',
            'expiration_date' => 'required|string',
            'analyze_result' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'string' => 'Campo deve conter palavras',
        ];
    }
}
