<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <div class="row container">
        <div class="col"><h1>Products list </h1></div>
        <div class='col'><a class='btn btn-warning' href="{{ route('products.create') }}">Add Product</a></div>
    </div>


    <ol>
    @foreach($Products as $pdt)
    <li>{{ $pdt->name}}, instock {{$pdt->stock}}, costprice {{$pdt->price}}</li>
    {{-- <li>{{ $pdt->stock}}</li> --}}
    @endforeach
    </ol>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>
</html>

