@extends("layouts.main");

@section("title","Products")

@push("_js")

	<script>
		alert(1);
	</script>

@endpush

@section("content")


	<div class="container mt-5">
		@auth
			<a href="/products/create">New</a>	
				
			@else
				sign to create

		@endauth
		
		<table class="table">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Count</th>
				<th>Price</th>
				<th>Views</th>
				<th>Description</th>
                <th>Action</th>
			</tr>}

			@foreach($products as $key => $product)
				<tr>
					<td>{{ $key+1 }}</td>

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

@endsection

