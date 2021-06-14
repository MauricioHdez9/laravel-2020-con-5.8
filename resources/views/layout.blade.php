{{-- //#13 BLADE el motor de PLANTILLAS-------------------------------------------------------------------------------------------------- --}}
{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','valor por defecto defenido en yield')</title>
   
</head>
<body>

   <nav>
    <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/portafolio">PORTAFOLIO</a></li>
        <li><a href="/contact">CONTACT</a></li>
        
    </ul>
</nav>
    @yield('content')
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','valor por defecto defenido en yield')</title>
    <style>
        .active a
        {
            color: green;
            text-decoration:none;
        }
    </style>
</head>
<body>

   <nav>
    {{-- <pre>{{dump(request()->url())}}</pre>
    <pre>{{dump(request()->path())}}</pre> 
    <pre>{{dump(request()->routeIs('home'))}}</pre>   --
    
    <ul>
        {{-- <li class="{{request()->routeIs('home') ? 'active':''}}"><a href="/">HOME</a></li>
        <li class="{{request()->routeIs('about') ? 'active':''}}"><a href="/about">ABOUT</a></li>
        <li class="{{request()->routeIs('portafolio') ? 'active':''}}"><a href="/portafolio">PORTAFOLIO</a></li>
        <li class="{{request()->routeIs('contact') ? 'active':''}}"><a href="/contact">CONTACT</a></li> --

        <li class="{{setActive('home')}}"><a href="/">HOME</a></li>
        <li class="{{setActive('about')}}"><a href="/about">ABOUT</a></li>
        <li class="{{setActive('portafolio')}}"><a href="/portafolio">PORTAFOLIO</a></li>
        <li class="{{setActive('contact')}}"><a href="/contact">CONTACT</a></li>
        {{--routeIs('nombre de la ruta ===> name('esto es el nombre')')  --
        
    </ul>
</nav>
    @yield('content')
</body>
</html> --}}


    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','valor por defecto defenido en yield')</title>
    <style>
        .active a
        {
            color: green;
            text-decoration:none;
        }
    </style>
</head>
<body>

   @include('partials/nav')
   @yield('content')   <!-- mini plantilla  personalizable  dentro de una plantilla generica// @yield('nombre de la mini plantilla')= -->
    
</body>
</html>