<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:50',
            'especie' => 'required',
            'raca' => 'required|max:50',
            'sexo' => 'required',
            'tamanho' => 'required',
            'data_entrada' => 'date_format:"d/m/Y"',
            'status' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Campo Obrigatório',
            'nome.max' => 'O Campo excedeu os 50 caracteres',
            'especie.required' => 'Campo Obrigatório',
            'raca.required' => 'Campo Obrigatório',
            'raca.max' => 'O Campo excedeu os 50 caracteres',
            'sexo.required' => 'O Campo Obrigatório',
            'tamanho.required' => 'O Campo Obrigatório',
            'data.date' => 'Data Inválida',
            'status.required' => 'O Campo Obrigatório',
        ];
    }
}

