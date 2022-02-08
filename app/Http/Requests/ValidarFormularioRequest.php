<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormularioRequest extends FormRequest
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
            'id' =>'max:1',
            'producto'=> 'required|max:10',
            'fecha_modificacion' => 'required',
            'rango1' => 'required|max:3',
            'rango2' => 'required|max:3',
            'precio' => 'required|max:4',
            'zonadesc' => 'required',
            'idzona' => 'required',
            'zona' => 'required',
        ];
    }

    public function messages()
    {
      return [
          'id.max' => 'El :attribute debe contener max 1 número.',
          'poducto.required' => 'El :attribute es obligatorio ',
          'producto.max' => 'El :attribute debe contener max 10 letras.',
          'fecha_modificacion.required' => 'El :attribute es obligatorio ',
          'rango1.required' => 'El :attribute es obligatorio ',
          'rango1.max' => 'El :attribute debe contener max 3 números.',
          'rango2.required' => 'El :attribute es obligatorio ',
          'zonadesc.required' => 'El :attribute es obligatorio ',
          'idzona.required' => 'El :attribute es obligatorio ',
          'zona.required' => 'El :attribute es obligatorio ',
      ];
    }
    public function attributes()
    {
      return [
          
            'id' =>'id',
            'producto'=> 'producto',
            'fecha_modificacion' => 'fecha',
            'rango1' => 'rango',
            'rango2' => 'rango',
            'precio' => 'precio',
            'zonadesc' => 'zona de descripción',
            'idzona' => 'id de la zona',
            'zona' => 'zona',
      ];
    }
}
