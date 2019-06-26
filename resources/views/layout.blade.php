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
	<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('viewCart') }}">
    <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/shopping-cart-71-543136.png" width="30" height="30" alt="">
  </a>
    <a href="{{ url('/') }}">
  	<img src="http://www.transparentpng.com/thumb/home/J4GYui-home-round-button-icon-png.png" width="30" height="30" alt="">
  </a>
  <a href="{{ url('/login') }}">
  	<img src="https://image.flaticon.com/icons/png/512/206/206897.png" width="30" height="30" alt="">
  </a>
</nav>

  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>