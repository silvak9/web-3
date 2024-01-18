<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão Kg para milhas</title>
</head>
<body>
    <h1>Converter quilômetros para milhas</h1>
    <form action="/kg" method="post">
        @csrf
        <p>Digite o Quilômetro: <input type="number" name="kg" id="kg"/></p>
        <button>Converter</button>
    </form>
</body>
</html>