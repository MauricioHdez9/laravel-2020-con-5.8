<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body> -->
<!-- //--------------------------#12-vistas---y html con vistas----------------------------------------------------------------------------------------------- -->
<!-- <nav>
    <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/portafolio">PORTAFOLIO</a></li>
        <li><a href="/contact">CONTACT</a></li>
        
    </ul>
</nav>
    <h1>home</h1>
    bienvenid@ <hp echo $nombre ?? "invitado" ?>  esta variable esta definisa en  web.php ,NOTA::hp=sinifica ?php  co=corcetes-->
    <!-- //-----------------------------#13-BLADE MOTOR DE PLANTILLAS-------------------------------------------------------------------------------------------------- -->
  {{-- <nav>
    <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/portafolio">PORTAFOLIO</a></li>
        <li><a href="/contact">CONTACT</a></li>
        
    </ul>
   </nav>
    <h1>home</h1> --}}
    <!-- bienvenid@ <hp echo $nombre ?? "invitado" ?> // esto es para mostrar en home uasando la nomenclatura php+html--> 
    <!-- bienvenid@ co co echo $nombre ?? "invitado" co co  //sintaxis con blade para usar nomenclatura php+html  NOTA::no funciona si el archivo no tiene la extencion blade.php (example .php = no funcionara la sintaxis blade  ) --> 
    <!-- la sintaxis de blade nos protege de ataques XSS = ataque con scripts -->
<!-- //-----------------------------#13-BLADE MOTOR DE PLANTILLAS-----------4:37--------------------------------------------------------------------------------------- -->
{{-- @extends('layout') <!--llamando a la plantilla  -->
@section('content') <!--contenido  de la mini plantilla  -->
<h1>home</h1>
@endsection --}}


<!-- //-----------------------------#13-BLADE MOTOR DE PLANTILLAS-----------6:10--------------------------------------------------------------------------------------- -->
@extends('layout') <!--llamando a la plantilla  -->

@section('titulo','Home') <!-- arobasection aroba= sibolo aroba//('titulo','Home') // en caso de poner segundos parametros no se pone la  llave de cierre  segun este cuate -->


@section('content') <!--contenido  de la mini plantilla  -->
<h1>home</h1>
@endsection
    
    
    
<!-- </body>
</html> -->