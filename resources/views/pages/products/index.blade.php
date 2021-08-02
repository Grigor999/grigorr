<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<a href="/products/create">New</a>
		<table class="table">
			<tr>
				<td>Name</td>
				<td>Count</td>
				<td>Price</td>
				<td>Views</td>
				<td>Description</td>
                <td>Action</td>
			</tr>
			@foreach($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->count }}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->views }}</td>
					<td>{{ $product->description }}</td>
                    <td>
                        <a href="/products/edit/{{$product->id}}" class="btn btn-warning">Edit</a>

                        <form action="/products/delete/{{$product->id}}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-deger">
                        </form>
                    </td>
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>
