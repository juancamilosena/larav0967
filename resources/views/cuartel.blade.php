<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cuartel</title>
</head>
<body>
    <h1>Cuartel</h1>

<form action="{{route('cuartels.store')}}" method="POST" enctype="multipart/form-data">

@csrf
<div  > 
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ubicacion:
    <br>
    <input type="text" name="ubication">
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