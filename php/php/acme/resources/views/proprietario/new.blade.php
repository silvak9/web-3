<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Proprietário</title>
</head>
<body>
    <h1>
        <form action="/proprietario/store" method="post">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"/><br>
            <button type="submit">Cadastrar</button>
        </form>
</body>
</html>