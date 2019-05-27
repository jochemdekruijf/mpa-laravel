@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

  .btn-primary {
    width: 100%;
  }

  .card{
    display: inline-block;
    width: calc(25% - (4px * 3) / 4) !important;
    margin-bottom: 5px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
        <nav class="nav">
		<a class="nav-link" href="{{ URL::to('products/create/', $categoryId) }}">Add new product</a>
</nav>
    </thead>
    <tbody>
        @foreach($products as $product)
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="">
  <div class="card-body">
  <h5 class="card-title">{{$product->product_name}}</h5>
    <p class="card-text">€{{$product->product_price}}</p>
    <a href="#" class="btn btn-primary">voeg aan winkelwagen toe</a>
  </div>
</div>
        @endforeach
<div>
@endsection