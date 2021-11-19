<!DOCTYPE html>
<html>
<head>
	<title> Data Category</title>
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
			<th>id </th>
			<th>category</th>
			<th>Action</th>
		</tr>
		@foreach($category as $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td>{{ $category->title }}</td>

			<td>
				<a href="/products/edit/{{ $category->id }}">Edit</a>
				<a href="/products/destroy/{{ $category->title }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="/products">Back</a>
</center>
 
 
</body>
</html>



