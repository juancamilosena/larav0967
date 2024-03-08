<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CUADRATICA</title>
</head>
<body>
    <h1>cuadratica</h1>

<form action="{{route('cuadratica.valor')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    ingresa tu primer valor:
    <br>
    <input type="number" name="a">
</label>
<br>
<label>
    Ingresa tu segundo valor: 
    <br>
    <input type="number" name="b">
</label>
<br>
<label>
    Ingresa tu tercerc valor: 
    <br>
    <input type="number" name="c">
</label>
<br><br><br>

<button class="btn btn-dark" type="submit">Enviar Formulario:</button>
</form>

<br>
<a href="http://127.0.0.1:8000/frmPagina" ><button class="btn btn-dark" type="submit">Volver</button></a>
</body>
</html>