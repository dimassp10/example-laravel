  
	
	<h2>Product yang dipilih : </h2>

  @foreach($product as $product)
  	
	{{$product->name}}
	{{$product->description}}
	
  @endforeach

  
  		<p>Edit Data Tersebut : 
       	<a href="/products/edit/{{ $product->id}}">Edit</a>
		<p>Hapus Data Tersebut : 
		<a href="/products/delete/{{ $product->id }}">Hapus</a>
		<br/>
		<a href="/products">Back</a>
		
