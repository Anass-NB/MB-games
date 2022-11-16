<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $game->title }}</title>
</head>
<body>

  <p>{{ $game->description }}</p>
  <iframe src="" frameborder="0"></iframe>
  <iframe src="{{ $game->url }}" width="800" height="600" scrolling="none" frameborder="0"></iframe>
</body>
</html>