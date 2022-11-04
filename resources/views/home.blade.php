<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/home.css') }}">
    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-sans antialiased">
    {{-- Star landing page --}}
    <div class="landing" style="background-image: url('{{ asset("assets/img/back.jpg") }}');">
      <div class="overlay"></div>
      <div class="header">
        <div class="container">
          <div class="logo">
            <img src="{{ asset("images/logo-removebg-preview.png") }}" alt="logo"><a href="#" class="logo"><span>W</span>eb  <span>G</span>ames</a>
          </div>
          <ul class="main-nav">
            <li><a href="#games">Games</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#popular">Popular</a></li>
            <li><a class="active" href="{{ route("login") }}">Login</a></li>
          </div>       
      </div>
      <div class="landi" >
          <div class="text" style="color:white">
            <p>Find the items & services you need from real players <br> of your favorite games all around the world!</p>
            
          </div>
      </div> 
    </div>
    {{-- ENd landing page --}}

    {{-- Start games part --}}
    <div class="games" id="games">
      <h2 class="grand-title">Games for everyone. Let's Play.</h2>
      <div class="container">
        <div class="row g-3">

          <div class="col">
            <div class="imgs">
            <div class="yellow-box"></div>
            <div class="work-info">       
              <p>Battle Game</p>
              <!-- Image Description -->
              <p>Lorem ipsum dolor sit amet consectetur </p>
              <a href="#" class="p-game">Play now</a>
            </div>           
            <img src="{{ asset("images/game-07.jpg") }}" class="Graphic">
            </div>
          </div>
          <div class="col">
            <div class="imgs">
            <div class="yellow-box"></div>
            <div class="work-info">       
              <p>Battle Game</p>
              <!-- Image Description -->
              <p>Lorem ipsum dolor sit amet consectetur </p>
              <a href="#" class="p-game">Play now</a>
            </div>           
            <img src="{{ asset("images/game-01.jpg") }}" class="Graphic">
            </div>
          </div>
          <div class="col">
            <div class="imgs">
            <div class="yellow-box"></div>
            <div class="work-info">       
              <p>Battle Game</p>
              <!-- Image Description -->
              <p>Lorem ipsum dolor sit amet consectetur </p>
              <a href="#" class="p-game">Play now</a>
            </div>           
            <img src="{{ asset("images/game-02.jpg") }}" class="Graphic">
            </div>
          </div>
          <div class="col">
            <div class="imgs">
            <div class="yellow-box"></div>
            <div class="work-info">       
              <p>Battle Game</p>
              <!-- Image Description -->
              <p>Lorem ipsum dolor sit amet consectetur </p>
              <a href="#" class="p-game">Play now</a>
            </div>           
            <img src="{{ asset("images/game-03.jpg") }}" class="Graphic">
            </div>
          </div>
          <div class="col">
            <div class="imgs">
            <div class="yellow-box"></div>
            <div class="work-info">       
              <p>Battle Game</p>
              <!-- Image Description -->
              <p>Lorem ipsum dolor sit amet consectetur </p>
              <a href="#" class="p-game">Play now</a>
            </div>           
            <img src="{{ asset("images/game-04.jpg") }}" class="Graphic">
            </div>
          </div>



        </div>

        <a class="explore_more_games">Explore All Games</a>

      </div>
    </div>
    {{-- End games part --}}

    {{-- Start Features --}}
    <div class="features">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-4">
            <img src="{{ asset("images/feature-1211.png") }}" alt="feature">
          </div>
          <div class="col-8">
            <div class="text">
              <h1>Discover <span>+  200 games</span></h1>
              <p>Go on epic quests and endless fun with top RPG and strategy titles. Try thrilling new Android games on the cloud or play locally on your pc.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End Features --}}

  </body>
</html>
