<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alterar Informações do Proprietário(a) {{$proprietario->nome}}</h1>
    <form action="/proprietario/{{$funcionario->id}}" method="post">
        @csrf
        @method('put')
        <p>
            Nome: <input type="text" name="nome" id="nome" value="{{$proprietario->nome}}">
        </p>
        <p>
            Idade: <input type="number" name="idade" id="idade" value="{{$proprietario->idade}}">
        </p>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>