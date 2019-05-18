@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Stock Name</td>
          <td>Stock Price</td>
          <td>Stock Quantity</td>
          <td colspan="2">Action</td>
        </tr>
        <nav class="nav">
		<a class="nav-link" href="{{ URL::to('products/create') }}">Add new product</a>
</nav>
    </thead>
    <tbody>
        @foreach($products as $product)
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">{{$product->product_name}}</h5>
    <p class="card-text">beschruiving</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_qty}}</td>
            <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection