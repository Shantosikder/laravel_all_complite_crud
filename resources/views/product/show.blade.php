
@extends('product.master')

@section('content')

<div>

	<h1>{{$product->name}}</h1>
	<p>{{$product->detail}}</p>
	<p><img src="/images/{{$product->photo}}" width="400px"></p>

</div>

<a href="{{url('products')}}" class="btn btn-primary">Back To Product List</a>

@endsection