<!-- //-----------------------------#13-BLADE MOTOR DE PLANTILLAS-----------4:37--------------------------------------------------------------------------------------- -->
{{-- @extends('layout')  <!--llamando a la plantilla  -->
@section('content')      <!--contenido  de la mini plantilla  -->
<h1>portafoli</h1>
@endsection --}}
<!-- //-----------------------------#13-BLADE MOTOR DE PLANTILLAS-----------6:10----------------------------------------------------------------------------------------->

@extends('layout') <!--llamando a la plantilla  -->

@section('titulo','portafolio')

@section('content') <!--contenido  de la mini plantilla  --> 

<h1>portafolio</h1>
<ul>
	

	 @forelse ($portafolio as $itemportafolio)
      <li>{{$itemportafolio->title}}<small>{{$itemportafolio->description}}</small></li>  
      {{-- //imprimir los datos mediante la base de datos --}} 
     
         
     @empty
     <li>no hay que mostrar</li>
         
     @endforelse
     {{$portafolio->links()}} 



</ul>
@endsection
<!-- //------------------------------------------------------------------------------------------------------------------------------- -->
