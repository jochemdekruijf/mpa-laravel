@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
      <form method="post" action="{{ route('products.update', $product->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">name of product</label>
          <input type="text" class="form-control" name="product_name" value={{ $product->product_name }} />
        </div>
        <div class="form-group">
          <label for="price">price of product</label>
          <input type="text" class="form-control" name="product_price" value={{ $product->product_price }} />
        </div>
        <div class="form-group">
          <label for="quantity">Quantity:</label>
          <input type="text" class="form-control" name="product_qty" value={{ $product->product_qty }} />
        </div>
        <div class="form-group">
              <label for="file">image file</label>
              <input type="file" class="form-control" name="product_img" value={{ $product->product_img }}/>
          </div>
          <div class="form-group">
              <label for="category_id">category</label>
              <input type="text" class="form-control" name="category_id" value={{ $product->category_id }}/>
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection