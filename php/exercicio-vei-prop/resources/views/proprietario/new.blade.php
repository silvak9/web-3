<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Proprietario</title>
</head>
<body>
    <h1>Cadastrar Proprietários</h1>
    <form action="/proprietario/new" method="post">
        @csrf
        <p>
            Nome: <input type="text" name="nome" id="nome">
        </p>
        <p>
            Idade: <input type="number" name="idade" id="idade">
        </p>
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>