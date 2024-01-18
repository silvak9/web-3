<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar veiculos</title>
</head>
<body>
    <h1>Editar Veiculo:</h1>
    <form action="/veiculo/{{$veiculo->id}}" method="post">
        @csrf
        @method('put')
        <p> 
        <select name="veiculo" id="veiculo">
            @foreach ($proprietario as $proprietario)
            <option value="{{$proprietario->id}}" {{$veiculo->proprietario->id == $proprietario->id ? 'selected' : ''}}>{{$proprietario->nome}}</option>
            @endforeach 
        </select>
        </p>
        <p>Modelo: <input type="text" name="modelo" id="modelo" value="{{$veiculo->modelo}}"></p>
        <p>Marca: <input type="text" name="marca" id="marca" value="{{$veiculo->marca}}"></p>
        <p>Ano de Fabricação: <input type="number" name="anofabricado" id="anofabricado" value="{{$veiculo->anoFabricacao}}"></p>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>