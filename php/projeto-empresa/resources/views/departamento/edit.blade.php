<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar departamento</h1>
    <form action="/departamento/{{$departamento->id}}" method="post">
    @csrf
    @method('put')
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome" value="{{$departamento->nome}}">
    <button type="submit">Salvar alterações</button>
</body>
</html>