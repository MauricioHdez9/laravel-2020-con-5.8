<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        // return "procesando el formulario";
        // return $request;
        //return $request->get('email');//forma de obtener un dato en especifico del formulario NOTA:para usar eto se nesesita de  use Illuminate\Http\Request,Request $request(como atributo de la funcion ),$request(como variable  que fue introducida en la funcion ==>lines 5,9,12;
         // # 19  validacion de formularios
         request()->validate([
            'name' => 'required', // nombre de name  => accion expexifica en este caso requerido 
            'email' =>'required|email',//ver la documentacion  de validacion en  laravel.com/docs/validation
            // 'email' =>['required','email']//otra forma de validar 
            'subject'=>'required',
            'content'=>'required|min:3'


    ],[ // este arreglo es para modificar los mensages de error en  el contenido especifico 
        'name.required'=>'tu nombre es obligatorio perro'

    ]);
    return"datos enviados exitosamente ";
    }
}
