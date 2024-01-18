<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Proprietário</title>
</head>
<body>
    <h1>
        <form action="/proprietario/{{$proprietario->id}}" method="post">
            @csrf
            @method('put')
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$proprietario->nome}}"><br>
            <button type="submit">Editar</button>
        </form>
</body>
</html>