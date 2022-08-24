
<html>
<head>
	<title>List Data Product</title>
</head>
<body>
  	
  	<center>
	<h3>Data Product</h3>
	<a href="/products/create"> + Insert New Data </a>
	</center>

	<br/>
	<br/>
 	<center>
		<table border="1">
		<tr>
			<th>Id  </th>
			<th>Name  </th>
			<th>Category Id  </th>
			<th>Description  </th>
			<th>Title  </th>
			<th>Action </th>
		</tr>
		@foreach($product as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->category_id }}</td>
			<td>{{ $product->description }}</td>
			<td>{{$product->title}}</td>

			<td>
				<a href="/products/edit/{{ $product->id }}">Edit</a>
				<a href="/products/destroy/{{ $product->id }}">Hapus</a>

			</td>
		</tr>
		@endforeach
	</table>
		<a href="/categories">Table Categories</a>
</center>
 
 
</body>
</html>
