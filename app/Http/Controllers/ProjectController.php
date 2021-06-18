<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $portafolio=[['title'=>'proyecto#1'],
         // ['title'=>'proyecto#2'],
		 // ['title'=>'proyecto#3'],
		 // ['title'=>'proyecto#4']];
         // $portafolio = DB::table('projects')->get();//opcion para obtener los datos de la base de datos 
         // $portafolio = Project::get();//
    //    $portafolio = Project::orderBy('created_at',"DESC")->get();//forma que te muetra la tabla de forma decendente //created_at = nombre de la columna 
    //    $portafolio = Project::latest('created_at')->get();
    //    $projects = Project::latest('created_at')->paginate();//paginate muestra sierta cantidad de elementos por pagina  por defal muestra 15 meter en los parentecis el numero para modificar 
                    //  return view('portafolio',compact('projects'));
                     return view('projects.index',['projects'=>Project::latest()->paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        // return request();//retorna los datos  en forma de arreglo
        //return request('title');//si solo se quiere un dato en especefico se declarara de esta manera
        //return request(['title']);//lo pasa como un == {'nombres'}
        // $title = request('title');
        // $url = request('url');
        // $description = request('descrption');
        //   project::create
        // ([
        //     'title'=>  request('title'),
        //     'url'=>  request('url'),
        //     'description' => request('description'),

        // ]);
        // project::create(request()->all());//esto es si los nombres concide como arriba 
        // $fields = request()->validate
        // ([
        //     'title'=>'required',
        //     'url'=>'required',
        //     'description'=>'required',

        // ]);
        // project::create(request()->only('title','url','description'));//solo asetas los paramentros que quieres 
        project::create($request->validated());//esto es porque se inporto el CreateProjectRequest $request , que acaba de ser creado  se creo  

        return redirect()->route('projects.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Project $project) //(estamos mandado todo el proyecto por su id )//la variable es la que se pone en web en las rutas y por esa se jala todo el "archivo" 
    {
    //    $project =  Project::find($id);// Project es el Model revisar el modelo que captura todo los datos //project se localisa app/providers/ 
    //    return view('projects.show',['project'=> $project]);
    //    return $id;
    //    return view('projects.show',['project'=>Project::findOrFail($id)]);
          return view('projects.show',['project' => $project]);//esta forma fuciona por los parametros que le pasamos a la funcion 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return  view('projects.edit',['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project,SaveProjectRequest $request)
    {
        // $project ->update(['title' => request('title'),'url' => request('url'),'description' => request('description')]);
        $project ->update($request->validated());//son todos los datos validados 
        return  redirect()->route('projects.show',$project);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');   
    }
}
