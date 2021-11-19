<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	    <input type="hidden" name="id" value="{{ $product->id }}"> <br/>
		Name :  <input type="text" required="required" name="name" value="{{ $product->name }}"> <br/>
		Description : <input type="text" required="required" name="description" value="{{ $product->description}}"> <br/>
		<input type="submit" value="Send">
</body>
</html>