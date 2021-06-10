
@extends('layout') <!--llamando a la plantilla  -->
@section('titulo','contact')
@section('content') <!--contenido  de la mini plantilla  -->
<h1>contact</h1>
@if ($errors->any())
{{-- @foreach ($errors->all() as $error){{-- //muestra solo los errores de un arreglo de arrores y su especificacion  }}
    <p>{{$error}}</p>
@endforeach --}}
    
@endif
<form method="POST" action="{{route('contact')}}">
    @csrf    {{-- // esto  es protecion contra ateque xcl contra scrips  si no se pone saltara error 419--}}
    <input name="name" placeholder="Nombre ..."value="{{old('name')}}"><br> {{-- //es importante que se ponga el name ya que sin esto no se podra visualisar en el json --}}
    {!! $errors->first('name','<small>:message</small><br>') !!}
    <input type="text" name="email"placeholder="Email" value="{{old('email')}}" id=""><br> {{-- old('nombre de name ') //guardara los datos que ya son correctos --}}
    {!! $errors->first('email','<small>:message</small><br>') !!}
    <input name="subject" placeholder="Asunto..."value="{{old('subject')}}"><br>
    {!! $errors->first('subject','<small>:message</small><br>') !!}
    <textarea name="content" placeholder="Mensaje ...">{{old('content')}}  </textarea><br>
    {!! $errors->first('content','<small>:message</small><br>') !!}
    <button>enviar </button>
</form>
@endsection
    