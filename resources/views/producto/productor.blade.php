<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ingresar Producto</h1>

    <form action="/ingresar-producto" method="post">
        @csrf

        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" required>

        <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
        <input type="date" name="fecha_vencimiento" required>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required>

        <label for="cantidad_en_stock">Cantidad en Stock:</label>
        <input type="number" name="cantidad_en_stock" required>

        <label for="categoria_id">Categoría:</label>
        <select id="categoria_id" name="categoria_id" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar Producto</button>
    </form>
</body>
</html>