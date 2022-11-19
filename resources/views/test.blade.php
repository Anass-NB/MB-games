<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $category->category }} Category</title>
</head>
<body>
  {{-- recuperer all games --}}
  {{-- <h1>All Games </h1>

  @foreach ($allcategories as $category)
  <h2 style="color: red">Category : {{ $category->category }} </h2>

  <ul>
    @foreach ( $category->game as $game)
      <li><h4 style="color: green">{{ $game->title }} </h4></li>
    @endforeach
  </ul>
  

  @endforeach --}}


  {{-- Recup categories --}}
{{-- <ul>
  @foreach ($category->game as $game)
    <li>{{ $game->title }}</li>
  @endforeach --}}

</ul>





</body>
</html>