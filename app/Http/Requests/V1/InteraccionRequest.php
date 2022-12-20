<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
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
            "perr_interesado" => "required|exists:perros,id",
            "perr_candidato" => "required|exists:perros,id",
            "preferencia" => "in:Aceptado,Rechazado"
            //
        ];
    }
    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'exists'=>'No existe el campo :attribute',
            'in'=>'Solo se admite Aceptado o Rechazado'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json($validator->errors()->all(), Response::HTTP_BAD_REQUEST)
        );
    }
}
