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
        <nav class="nav">
		<a class="nav-link" href="{{ URL::to('categories/create') }}">Add new category</a>
</nav>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <div class="card" style="width: 200px; display: inline-block; margin: 5px; ">
  <img class="card-img-top" src="https://www.maves.be/autoimg/199519/400x400/ffffff/propellor-no-image-available.jpg" alt="Card image cap">
  <div class="card-body  align-items">
  <h5 class="card-title">{{$category->category_name}}</h5>


    <a href="{{ url('products?category=' . $category->id)}}" class="btn btn-primary">Bekijk categorie</a>


    <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a></td>
      <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
  </div>
</div>
                </form>
            
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection