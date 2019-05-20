@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Product
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">name of product</label>
              <input type="text" class="form-control" name="product_name"/>
          </div>
          <div class="form-group">
              <label for="price">price of product</label>
              <input type="text" class="form-control" name="product_price"/>
          </div>
          <div class="form-group">
              <label for="quantity">Quantity:</label>
              <input type="text" class="form-control" name="product_qty"/>
          </div>
          <div class="form-group">
              <label for="file">image file</label>
              <input type="file" class="form-control" name="product_img"/>
          </div>
          <div class="form-group">
              <label for="category">category</label>
              <input type="text" class="form-control" name="category_id"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection

        <!-- 'product_name',
        'product_price',
        'product_qty',
        'product_img',
        'category_id' -->
    