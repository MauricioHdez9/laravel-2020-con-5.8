<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portafolio=[['title'=>'proyecto#1'],
        //              ['title'=>'proyecto#2'],
		// 	         ['title'=>'proyecto#3'],
		// 	         ['title'=>'proyecto#4']];
        //$portafolio = DB::table('projects')->get();//opcion para obtener los datos de la base de datos 
       $portafolio = Project::get();//
    //    $portafolio = Project::orderBy('created_at',"DESC")->get();//forma que te muetra la tabla de forma decendente //created_at = nombre de la columna 
    //    $portafolio = Project::latest('created_at')->get();
    //    $portafolio = Project::latest('created_at')->paginate();//paginate muestra sierta cantidad de elementos por pagina  por defal muestra 15 meter en los parentecis el numero para modificar 
                     return view('portafolio',compact('portafolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
