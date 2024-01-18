<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Veículo</title>
</head>
<body>
    <h1>
    <form action="/veiculo/{{$veiculo->id}}" method="post">
            @csrf
            @method('put')
            <label for="Proprietário">Proprietário</label>
                <select name="proprietario" id="proprietario">
                @foreach ($proprietarios as $proprietario)
                <option value="{{$proprietario->id}}">{{$proprietario->nome}}</option>
                @endforeach
            </select><br>
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" value="{{$veiculo->modelo}}"><br>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="/veiculo">Voltar</a>
</body>
</html>