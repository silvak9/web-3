<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular area retangulo</title>
</head>
<body>
    <h1>Calcular Área do Retângulo</h1>
    <form action="/retangulo/calcular" method="post">
        @csrf
        <p>Base: <input type="number" name="base" id="base"/></p>
        <p>Altura: <input type="number" name="altura" id="altura"/></p>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>