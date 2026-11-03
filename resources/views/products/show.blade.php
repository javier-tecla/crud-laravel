<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>

<body>
    <h1>Producto Detalle</h1>

    <a href="{{ route('products.index') }}">Atras</a>
    <br>
    <label for="">ID:</label>
    <p>{{ $product->id }}</p>
    <label for="">Nombre:</label>
    <p>{{ $product->name }}</p>
    <label for="">Precio:</label>
    <p>{{ $product->price }}</p>
    <label for="">Descripción:</label>
    <p>{{ $product->description }}</p>
    
    

</body>

</html>
