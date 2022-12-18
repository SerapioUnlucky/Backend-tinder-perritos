<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use SebastianBergmann\Type\TrueType;

class InteraccionRequest extends FormRequest
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
            "perr_interesado" => "required|integer|different:perr_interesado|exists:perros,id",
            "perr_candidado" => "required|integer|different:perr_candidato|exists:perros,id",
            "preferencia" => "in:Aceptado,Rechazado"
            //
        ];
    }
    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'integer' => 'El campo :attribute debe ser entero',
            'different'=>'No pueden tener campos iguales',
            'exists'=>'No existe el campo :attribute',
            'in'=>'Solo se admite Aceptado o Rechazado'
        ];
    }
}
