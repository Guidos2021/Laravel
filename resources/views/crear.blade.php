<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1><center>Formulario Crear</center></h1>
    <br>
    <form action="{{route('productos.formdata')}}" method="GET">
        <label for="">
            Nombre:
            <input type="text" name="nombre">
        </label>
        <br><br>
        <label for="">
            Precio:
            <input type="text" name="precio">
        </label>
        <br><br>
        <label for="">
            Existencias:
            <input type="text" name="existencias">
        </label><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>