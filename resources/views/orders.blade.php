@extends('layout')

@section('content')
<?php
 var_dump($orders);
?>
	@foreach($orders as $order)

<h5>Price</h5>
<p>{{$order->order}}</p>
<h5>order:</h5>
<p>{{$order->order}}</p>
<br>
<br>


@endforeach

@endsection