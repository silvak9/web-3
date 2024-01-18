<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Departamento</title>

</head>
<body>
    <h1>Departamento</h1>
    <form action="/departamento/store" method="post">
    @csrf
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome">
    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>