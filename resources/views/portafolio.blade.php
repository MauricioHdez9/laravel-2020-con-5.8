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
	{{-- <//?php //foreach ($portafolio as $itemportafolio) 
     {
         echo "<li>". $itemportafolio['title']."</li>";
     }?> primer forma de listar un  areglo --}}

     {{-- </?//php foreach ($portafolio as $itemportafolio):?> 
     
         <li>{{$itemportafolio['title']}}</li>
     </?//php endforeach?> segunda forma de imprimir un arreglo --}}

     {{-- @foreach ($portafolio as $itemportafolio){{--  //forma de imprimir un foreach con blade 
          <li>{{$itemportafolio['title']}}</li>
     @endforeach --}}

	 @forelse ($portafolio as $itemportafolio)
     <li>{{$itemportafolio['title']}}</li>
     {{-- <li>{{$itemportafolio['title']}}<pre>{{var_dump($loop->last)}}</pre></li>
     <li>{{$itemportafolio['title']}}<pre>{{ $loop->last ?'es el ultimo ':''}}</pre></li>
     <li>{{$itemportafolio['title']}}<pre>{{ $loop->first ?'es el primero ':''}}</pre></li> --}}

         
     @empty
     <li>no hay que mostrar</li>
         
     @endforelse



</ul>
@endsection
<!-- //------------------------------------------------------------------------------------------------------------------------------- -->
