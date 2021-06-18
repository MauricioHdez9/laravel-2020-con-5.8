<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //aqui podemos poner condicionales para que se apliquen,  como si es el admi se aplican las rules
        return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
        [
            'title'=>'required',
            'url'=>'required',
            'description'=>'required',

        ];
    }
    public function messages()
    {
        return ['title.required'=>'el proyecto nesecita un nombre'];
    }
}
