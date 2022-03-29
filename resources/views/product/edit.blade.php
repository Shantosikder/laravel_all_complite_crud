	@extends('product.master')

	@section('content')

	<h1>Product Update::</h1>

	<form action="{{ROUTE('products.update',$product->id)}}" method="post">
		@csrf
		@method('PUT')
		<div class="form-group">

			<label for="name">Product Name:</label>
			<input type="name" id="name" name="name" value="{{$product->name}}" class="form-control" placeholder="Enter Your Name">

		</div>
		<div class="form-group">

			<label for="details">Details:</label><br>
			<textarea placeholder="Enter Your Details" name="details" id="" cols="30" rows="10" class="form-control">{{$product->detail}}</textarea>

		</div>

		<button type="submit" class="btn btn-success">SUBMIT</button>
	</form>
	
	@endsection