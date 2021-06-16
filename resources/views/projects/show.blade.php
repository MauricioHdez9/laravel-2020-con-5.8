@extends('layout') <!--llamando a la plantilla  -->

@section('titulo','portafolio ' . $project->title)

@section('content')
<h1>{{$project->title}}</h1>{{-- //pide el deto del json  --}}
<p>{{ $project->descrption}}</p>
<p>{{$project->created_at}}</p>
{{-- {{$project}}//imprime los datos en un json --}}
@endsection