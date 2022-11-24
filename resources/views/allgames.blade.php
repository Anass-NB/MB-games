<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ALL GAMES</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ URL::asset('assets/css/allgames.css') }}">
</head>

<body class="font-sans antialiased allgameshtml">
  <div class="landing">
    <div class="overlay"></div>
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
    {{-- Start Games --}}
    <div class="games">
      <div class="container">
        <?php $i1=0; while($i1<$i){?>
        
        <div class="row category">
          <h1 class="nameofcategory">{{$cat[$i1]}} Games</h1>
          <?php $count=0;?>
          @foreach($games as $game)

          <?php if($game->category == $cat[$i1]) $count++;?>
          <?php if($count<=4){ ?>
            @if($game->category == $cat[$i1])
          <a href="{{ route('game_page',$game->id) }}" class="col-3 mb-4 text-center">
            <div>
              <img class="gameimmg" src="{{ URL::asset("game_image/$game->image") }}" alt="game">
              <h5>{{$game->title}}</h5>
            </div>    
          </a>
          @endif
          <?php }?>
          @endforeach
          <a href="{{ route("category_page",$cat[$i1]) }}" class="arrow-all text-end">ALL<i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
        <?php $i1++;}?>
        
       
    </div>

         
   



       


      </div>
      
      {{-- start sub-footer --}}
      <div class="subfooter ">
        <p class="lead text-center text-light py-2 pfooter">Created by <span style="color: var(--green-color)">Mouradi</span> &
          <span style="color: var(--green-color)">Nabil</span> <span>2022</span></p>
      </div>
      {{-- End sub-footer --}}

      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

    </div>

    {{-- End Games --}}
    {{-- ENd landing page --}}

    <script>
      // Get the button
      let mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      console.log("testing jj");
    </script>

</body>

</html>
