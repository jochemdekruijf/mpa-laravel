@extends('layout')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group" style="padding-top: 20px;">
                    @foreach($products as $product)
                            <li class="list-group-item">
                                <span class="badge">anntal: {{ $product['quantity'] }}</span>
                                <strong>{{ $product['name'] }}</strong>
                                <span class="label label-success">prijs: €{{ $product['subtotal'] }}</span>
                                <a href="{{ url('killone?product=' . $product['id']) }}" class="btn btn-danger">Delete</a>   
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>


        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="#" type="button" class="btn btn-success"  style="margin: 5px;">Checkout</a>
            </div>
        </div>
         <a href="{{ url('kill') }}" class="btn btn-primary"> leeg session</a>
         <br>
        
    @endif

@endsection