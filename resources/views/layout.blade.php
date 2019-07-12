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

  <a href="{{ url('/') }}">
  	<img src="https://bower.io/img/bower-logo.png" width="35" height="35" alt="home">
  </a>
<!-- http://www.transparentpng.com/thumb/home/J4GYui-home-round-button-icon-png.png -->
  <a  href="{{ url('viewCart') }}">
  <span class="badge text-#FF7F00" style="float: right; font-size: 19px;">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
    <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/shopping-cart-71-543136.png" width="30" height="30" alt="winkelwagen">
  </a>

  <a href="{{ url('/order') }}">
  	<img  src="https://img.icons8.com/bubbles/2x/purchase-order.png" width="35" height="35"  alt="bestellingen">
  </a>
  
  <a href="{{ url('/login') }}">
  	<img src="https://image.flaticon.com/icons/png/512/206/206897.png" width="30" height="30" alt="login">
  </a>
</nav>

  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>