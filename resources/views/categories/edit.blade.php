@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Category
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
      <form method="post" action="{{ route('categories.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">name of category</label>
          <input type="text" class="form-control" name="category_name" value={{ $category->category_name }} />
        </div>
        <div class="form-group">
              <label for="file">image file</label>
              <input type="file" class="form-control" name="category_img" value={{ $category->category_img }}/>
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection