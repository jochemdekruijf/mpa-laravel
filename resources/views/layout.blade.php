<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MPA-laravel</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
	<nav class="navbar navbar-dark bg-dark"">
  <a class="navbar-brand" href="{{ url('viewCart') }}">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8Bncj1OxlP5IoFnjojgmEwkmlOUYGFRe4cxmvHtihDVXt--SURA" width="30" height="30" alt="">
  </a>
  <a href="{{ url('/login') }}">
  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBHvpKbjN_ZwfS839w2AFhbmwUAN6Kr5yVUbRFH3J6dc_-DqCIpA" width="30" height="30" alt="">
  </a>
</nav>

  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>