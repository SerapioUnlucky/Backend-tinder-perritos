<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class PerroRequest extends FormRequest
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

            "perr_nombre" => "required|string",
            "perr_imagen" => "required|string",
            "descripcion" => "required|string"
            
        ];
    }

    public function messages(){

        return [
        'required' => 'El campo :attribute es requerido',
        'string' => 'El campo :attribute debe ser de tipo string'
        ];
    }
}
