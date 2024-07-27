<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sito_prova</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])  
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('show')}}">Tutti gli Articoli</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link active" href="{{route('contact')}}">Contattaci</a>
              </li>
              @endauth
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Attendi</a>
              </li>
            </ul>
          </div>
@auth
<p>Benvenuto, {{Auth::user()->name}}</p>
<form method="POST" action="{{ route('logout') }}">
   @csrf
<button  class="btn btn-outline-danger float-end" >Logout</button>
</form>

    @else
    <a type="button" class="btn btn-outline-primary float-end" href='{{route('login')}}'>Login</a>
    <a type="button" class="btn btn-outline-secondary float-end" href='{{route('register')}}'>Register</a>
@endauth
         
        </div>
      </nav>


      {{$slot}}

</body>
</html>