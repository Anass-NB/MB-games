<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ URL::asset('assets/home.css') }}">
    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-sans antialiased">
    {{-- Star landing page --}}
    <div class="landing">
      <div class="landing-page">
        <header class="main-header">
          <div class="logo">
            <a href="{{ url("/") }}">
              WEB GAMES LOGO HERE
            </a>
          </div>
          <nav class="desktop-main-menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">All Games</a></li>
              <li><a href="#">Categories</a></li>
              <li><a href="#">Contact</a></li>
              <li><a class="activebtn" href="{{ route("login") }}">Login</a></li>
  
            </ul>
          </nav>
        </header>
      </div>
      <div class="first-page">
        <div class="img">
          <img draggable="false" src="{{ asset("images/302775228_403384081725332_1283203408436204244_n.jpg") }}" alt="image">
        </div>
        <div class="text">
          <h3 class="display-2 lead">WEB GAMES</h3>
          <p>Here You Can find Any Game with A Lot Of Categories.. And Play it Online !</p>
          <a href="#" class="btn-play">Play Now !</a>
        </div>
      </div>
    </div>
    {{-- ENd landing page --}}

    {{-- Start games part --}}
    <div class="games">
      <h2 class="main-title">Our Games</h2>
      <div class="container">
        <div class="row g-1">
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-01.jpg") }}" alt="game">
            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-02.jpg") }}" alt="game">

            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-03.jpg") }}" alt="game">
            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-04.jpg") }}" alt="game">

            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-04.jpg") }}" alt="game">
            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-05.png") }}" alt="game">
            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-06.png") }}" alt="game">
            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-07.jpg") }}" alt="game">
            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
          <div class="col-3">
            <div class="data">
                <img src="{{ asset("images/game-08.jpg") }}" alt="game">
            </div>
            <div class="info">
                <h3>Name</h3>
                <p>simple Short Description</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End games part --}}

  </body>
</html>
