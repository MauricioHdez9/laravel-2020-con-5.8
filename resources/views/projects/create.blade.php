@extends('layout') <!--llamando a la plantilla  -->

@section('titulo','creador  de proyecto')

@section('content') <!--contenido  de la mini plantilla  --> 

<h1>crear proyecto</h1>
@if ($errors->any())
	<ul>
		@foreach ($errors ->all() as $error)
		<li>{{ $error }}</li>
			
		@endforeach
		
	</ul>
	
@endif
<form method="POST" action="{{route('projects.store')}}"> 
	@csrf
	<label for="">
		titulo del proyecto <br>
		<input type="text" name="title" value="{{old('title')}}">
	</label>
	<br>
	<label for="">
		url del proyecto <br>
		<input type="text" name="url" value="{{old('url')}}">
	</label>
	<br>
	<label for="">
		descripcion del proyecto <br>
		<textarea name="description">{{old('description')}}</textarea>
	</label>
	<button>guardar</button>
</form>
@endsection