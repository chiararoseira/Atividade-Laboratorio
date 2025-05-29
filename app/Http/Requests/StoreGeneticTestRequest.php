<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGeneticTestRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'patient_name' => 'required|string|max:100',
            'exam_id' => 'required|alpha_num|unique:genetic_tests,exam_id',
            'exam_type' => 'required|in:Sequenciamento,PCR,Microarray',
            'collection_date' => 'required|date|before_or_equal:today',
            'report' => 'nullable|string|max:500',
        ];
    }

    public function messages()
    {
        return [
            'patient_name.required' => 'O nome do paciente é obrigatório.',
            'patient_name.string' => 'O nome do paciente deve ser um texto.',
            'patient_name.max' => 'O nome do paciente não pode ter mais que 100 caracteres.',
            'exam_id.required' => 'O número do exame é obrigatório.',
            'exam_id.alpha_num' => 'O número do exame deve conter apenas letras e números.',
            'exam_id.unique' => 'O número do exame já está cadastrado.',
            'exam_type.required' => 'O tipo de exame é obrigatório.',
            'exam_type.in' => 'O tipo de exame deve ser Sequenciamento, PCR ou Microarray.',
            'collection_date.required' => 'A data de coleta é obrigatória.',
            'collection_date.date' => 'A data de coleta deve ser uma data válida.',
            'collection_date.before_or_equal' => 'A data de coleta não pode ser maior que hoje.',
            'report.string' => 'O laudo deve ser um texto.',
            'report.max' => 'O laudo não pode ter mais que 500 caracteres.',
        ];
    }
}