<nav>
    
    <ul>
        

        <li class="{{setActive('home')}}"><a href="{{route('home')}}">HOME</a></li>
        <li class="{{setActive('about')}}"><a href="{{route('about')}}">ABOUT</a></li>
        <li class="{{setActive('projects.*')}}"><a href="{{route('projects.index')}}">PROJECTS</a></li>
        <li class="{{setActive('contact')}}"><a href="{{route('contact')}}">CONTACT</a></li>
        
    </ul>