@extends('product.master')

@section('content')

		<h1>Product Entry::</h1>
	<form action="{{ROUTE('products.store')}}" method="post" enctype="multipart/form-data">

		@include('product.error')
		
		@csrf
		<div class="form-group">
			<label for="name">Product Name:</label>
			<input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">		
		</div>
		<div class="form-group">
			<label for="details">Details:</label><br>
			<textarea placeholder="Enter Your Details" name="details" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="name">Photo:</label>
			<input type="file" name="photo" class="form-control">		
		</div>
		<button type="submit" class="btn btn-success">SUBMIT</button>
	</form>


@endsection

