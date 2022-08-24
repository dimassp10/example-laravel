<html>
<head>
     <tit></title>
</head>
<body>

     <h3>Edit Product</h3>
     <h1>AAWOKAOWKAOKWAOKWAOKWAO</h1>

     <a href="/products">Back</a>

     @if ($errors->any())
     <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
     <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
     </ul>
     </em>
     </div>
     @endif

     @foreach($product as $product)
     <form action="/products/update" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $product->id }}"> <br/>
          Name :  <input type="text" required="required" name="name" value="{{ $product->name }}"> <br/>
          Description :  <input type="text" required="required" name="description" value="{{ $product->description }}"> <br/>
          <input type="submit" value="Send">
     </form>
     @endforeach


</body>
</html>
