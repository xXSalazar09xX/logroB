<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ingresar Categoría</h1>

    <form action="/ingresar-categoria" method="post">
        @csrf

        <label for="nombre">Nombre de la Categoría:</label>
        <input type="text" name="nombre" required>
        <select name="producto_id" id="producto_id"></select>
        @foreach($categorias as $car)
                    <option value="{{$car->id}}">{{$car->nombre}}</option>
                @endforeach

        <button type="submit">Guardar Categoría</button>
    </form>
</body>
</html>