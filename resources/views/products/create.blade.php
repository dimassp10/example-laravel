<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 		
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Input New Data</h3>
                            <br/>
 
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                         
                            <form action="/products/store" method="post">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category Id</label>
                                    <input class="form-control" type="text" name="category_id" value="{{ old('category_id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input class="form-control" type="text" name="description" value="{{ old('description') }}">
                                </div>
                                 <div class="form-group">
                                    <label for="title">Category Title</label>
                                    <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Send">
                                </div>
                            </form>
                            <a href="/products" >Back</a>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>