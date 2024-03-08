<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>AMIGOS</title>
</head>
<body>
    <h1>Numeros amigos</h1>

<form action="{{route('numero.amigo')}}" method="POST" enctype="multipart/form-data">

@csrf
<div  > 
<label>
    Ingresa tu primer numero:
    <br>
    <input type="number" name="numero1">
</label>
<br>
<label>
    Ingresa tu segundo numero:
    <br>
    <input type="number" name="numero2">
</label>
<br><br><br>

<button class="btn btn-dark" type="submit">Enviar Formulario:</button>
</form>
<br>
<br>
<a href="http://127.0.0.1:8000/frmPagina" ><button class="btn btn-dark" type="submit">Volver</button></a>
</div>
</body>

</html>
