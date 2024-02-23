<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ingreso de numeros primo</title>
</head>
<body>
    <h2>Numero Primo</h2>

    <form action='{{ route('taller.esPrimo') }}' method='POST' >
        @csrf
    <label for='numero'>Numero:</label>
    <input type='number' name='numero' required>
    <br>
    <button type='submit'>Calcular primo</button>
    <br>
</form>
</body>
</html>