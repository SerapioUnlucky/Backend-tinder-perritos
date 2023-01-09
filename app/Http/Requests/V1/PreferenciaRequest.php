<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class PreferenciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "preferencia" => "required|in:Aceptado,Rechazado"
            //
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'in'=>'Solo se admite Aceptado o Rechazado'
        ];
    }
}
