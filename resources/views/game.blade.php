<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/game.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>{{ $game->title }}</title>

</head>

<body>

  <div class="landing">

    <div class="header">
      <div class="container2 d-flex justify-content-between">
        <div class="logo">
          <img src="{{ asset('images/lloooogo.png') }}" alt="logo"><a href="{{ route('home_front') }}"
            class="logo"><span>W</span>eb <span>G</span>ames</a>
        </div>
        <ul class="main-nav bg-sss">
          <li><a href="{{ url('/') }}">Games</a></li>
          <li><a href="#categories">Categories</a></li>
          <li><a href="#popular">Popular</a></li>
          <li><a class="active" href="{{ route('login') }}">Login</a></li>
      </div>
    </div>

    <div class="game-part">
      <div class="game-info ">
        <div class="container2">
          <h1 class="game-title  mt-4">{{ $game->title }}</h1>
          <p class="game-description">{{ $game->description }}</p>
        </div>
        <iframe src="{{ $game->url }}" width="80%" height="600" scrolling="none" frameborder="0"></iframe>
      </div>
    </div>

    {{-- start sub-footer --}}
    <hr class="hr-footer">
    <div class="subfooter">
      <p class="lead  text-center text-light  pfooter">Created by <span
          style="color: var(--green-color)">Mouradi</span> & <span style="color: var(--green-color)">Nabil <small
            style="color: var(--green-color)">2022 &copy;</small> </p>
    </div>
    {{-- End sub-footer --}}
  </div>

</body>

</html>
