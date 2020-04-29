<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Consejo_directivoFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'dni' => 'max:8',
            'nombres' => 'required|max:60',
            'apellidos' => 'required|max:60',
            'imagenC' => ''
        ];
    }
}
