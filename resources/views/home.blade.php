<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
<link rel="stylesheet" href="{{ URL::asset("assets/home.css") }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        





<div class="landing-page">
  <header class="main-header">
    <div class="logo">
      <a href="index.html">
        WEB GAMES LOGO HERE
      </a>
    </div>
    <nav class="desktop-main-menu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">All Games</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>

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


</body>
</html>
