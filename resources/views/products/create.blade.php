<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>

<body>
    <h1>Nuevo Producto</h1>

    @if ($errors->any())
        <div>
            <strong>Opps!</strong> Hay problemas con los inputs.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="">Nombre:</label>
        <input type="text" name="name" placeholder="Ingrese Nombre">
        <br><br>
        <label for="">Precio:</label>
        <input type="text" name="price" placeholder="Ingrese Precio">
        <br><br>
        <label for="">Descripción:</label>
        <textarea name="description" cols="30" rows="10" placeholder="Ingrese la Descripción"></textarea>
        <br><br>
        <button type="submit">Guardar</button>
    </form>

</body>

</html>
