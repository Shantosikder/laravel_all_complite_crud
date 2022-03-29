@extends('product.master')

@section('content')


		<h1>Product List::</h1>

<a href="{{URL('products/create')}}" class=" btn btn-success ">New Product</a><br><br>

@include('product.success')

@include('product.error')

		<table class="table table-striped" border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Photo</th>
			<th>Details</th>
			<th>Action</th>
		</tr>

		@foreach ($Product as $products)
		<tr>
			<td>{{$products->id}}</td>
			<td>{{$products->name}}</td>
			<td>{{$products->photo}}</td>
			<td>{{$products->detail}}</td>

			<td>
				<form action="{{ROUTE('products.destroy', $products->id)}}" method="post">
				<a href="{{ROUTE('products.show', $products->id)}}" class="btn btn-primary">Show</a>
				<a href="{{ROUTE('products.edit', $products->id)}}" class=" btn btn-info">Edit</a>

				@csrf
				@method('DELETE')

				<button type="submit" class=" btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
