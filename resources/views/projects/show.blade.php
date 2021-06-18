@extends('layout') <!--llamando a la plantilla  -->

@section('titulo','portafolio ' . $project->title)

@section('content')
<h1>{{$project->title}}</h1>{{-- //pide el deto del json  --}}
<a href="{{route('projects.edit',$project)}}">Editar</a>
<form method="POST" action="{{route('projects.destroy',$project)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>
</form>
<p>{{ $project->description}}</p>
<p>{{$project->created_at}}</p>
{{-- {{$project}}//imprime los datos en un json --}}
@endsection