@extends("layouts.app")

@section('css')

  <link rel="stylesheet" href="{{ URL::asset("assets/home.css") }}">
  <!-- CSS only -->

@endsection

@section('title')
  Home
{{-- @stop --}}
@endsection

@section('content')
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

@endsection
