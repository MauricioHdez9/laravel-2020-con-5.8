@extends('layout') <!--llamando a la plantilla  -->

@section('titulo','portafolio')

@section('content') <!--contenido  de la mini plantilla  --> 

<h1>portafolio</h1>
<ul>
	

	 @forelse ($projects as $project)
      {{-- <li>{{$project->title}}<small>{{$project->descrsption}}</small></li>   --}}
      {{-- //imprimir los datos mediante la base de datos --}} 
      <li> <a href="{{route('projects.show',$project)}}">{{$project->title}}</a> </li>  
     
         
     @empty
     <li>no hay que mostrar</li>
         
     @endforelse
     {{$projects->links()}} 



</ul>
@endsection