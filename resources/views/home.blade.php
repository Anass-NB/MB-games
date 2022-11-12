<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset("images/favicon.png") }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/css/home.css') }}">
    <!-- Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-sans antialiased">
    {{-- Star landing page --}}
    <div class="landing" style="background-image: url('{{ asset("images/back1.jpg") }}');">
      <div class="overlay"></div>
      <div class="header">
        <div class="container2 flex justify-content-between">
          <div class="logo">
            <img src="{{ asset("images/lloooogo.png") }}" alt="logo"><a href="{{ route("home_front") }}" class="logo"><span>W</span>eb  <span>G</span>ames</a>
          </div>
          <ul class="main-nav">
            <li><a href="{{ url("/allgames") }}">Games</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#top-3">Popular</a></li>
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
      <div class="container2">
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

        <a class="explore_more_games" href="{{ url("/allgames") }}">Explore All Games</a>

      </div>
    </div>
    {{-- End games part --}}

    {{-- Start Features --}}
    <div class="features">
      <div class="container2">
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
        <div class="row pb-4 justify-content-between align-items-center">
          <div class="col-8">
            <div class="text">
              <h1>Play games online or on your PC </h1>
              <p>Go on epic quests and endless fun with top RPG and strategy titles. Try thrilling new Android games on the cloud or play locally on your pc.</p>
            </div>
          </div>
          <div class="col-4">
            <img src="{{ asset("images/feature-2211.png") }}" alt="feature">
          </div>
        </div>
      </div>
    </div>
    {{-- End Features --}}






    <div class="statics">
      <div class="container2">
        <h2>Our Statistics</h2>
        <div class="row mt-4">
          <div class="col py-4 text-center  text-white text-center">
            <i class="fa-solid fa-gamepad d-flex justify-content-center"></i>
            <span>23</span>
            <h4>All Games</h4>
          </div>
          <div class="col py-4 text-center  text-white text-center">
            <i class="fa-solid fa-list d-flex justify-content-center"></i>
            <span>16</span>
            <h4>Categories</h4>
          </div>
          <div class="col py-4 text-center  text-white text-center">
            <i class="fa-solid fa-user d-flex justify-content-center"></i>
            <span>40</span>
            <h4>Online players</h4>
          </div>
          <div class="col py-4 text-center  text-white text-center">
            <i class="fa-solid fa-earth-americas d-flex justify-content-center"></i>
            <span>9</span>
            <h4>Countries</h4>
          </div>
        </div>
      </div>
    </div>

    {{-- Start Top3 games --}}
    <div class="top-3" id="top-3">
      <h2 class="text-center">Top 3 Games</h2>
      <div class="container2">
        <div class="row my-5 text-center">
          <div class="col-4">
            <img src="{{ asset("images/game-04.jpg") }}" alt="game">
            <h3>Find it 2022</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a href="#">Play now</a>
          </div>
          <div class="col-4">
            <img src="{{ asset("images/game-02.jpg") }}" alt="game">
            <h3>Star Lengends 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a href="#">Play now</a>
          </div>
          <div class="col-4">
            <img src="{{ asset("images/game-06.png") }}" alt="game">
            <h3>Wars19</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a href="#">Play now</a>
          </div>
        </div>
      </div>
    </div>
    {{-- End Top3 games --}}




    {{-- Start Footer --}}
    
    <div class="footer text-white">
      <div class="container2">
        <div class="row">
          <div class="col">
            <img src="{{ asset("images/lloooogo.png") }}" alt="logo">
            <h4 class="lead text-muted">Web Games</h4>
            <p>Play all games in our web site online!</p>
          </div>
          <div class="col">
            <h2 class="lead foot-title">Links</h2>
            <ul class="foot-links">
              <li><a href="#games">Our Games</a></li>
              <li><a href="#categories">Categories</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#games">About</a></li>
            </ul>
          </div>
          <div class="col justify-content-center d-flex align-items-center">
            <a href="{{ url("/allgames") }}" class="footer-btn">Web Games</a>
          </div>
          <div class="col">
            <h2 class="lead foot-title">Contact US</h2>
            <ul class="foot-links">
              <li><a href="#games">Facebook <i class="ms-3 fa-brands fa-facebook-f"></i> </a></li>
              <li><a href="#categories">Mail <i class="ms-5 fa-solid fa-envelope"></i></a></li>
              <li><a href="#contact">Github <i  class="ms-4 fa-brands fa-github"></i></a></li>
            </ul>
          </div>
         
        </div>
      </div>
      
    </div>
    {{-- start sub-footer --}}
    <hr class="hr-footer">
    <div class="subfooter">
      <p class="lead bg-black text-center text-light py-2 pfooter">Created by <span style="color: var(--green-color)">Nabil</span> & <span style="color: var(--green-color)">Mouradi</span> &copy;</p>
    </div>
    {{-- End sub-footer --}}
    {{-- End Footer --}}

    









  </body>
</html>
