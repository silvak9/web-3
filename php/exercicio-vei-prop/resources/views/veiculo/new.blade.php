<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar veiculos</title>
</head>
<body>
    <h1>Cadastro de Veiculos:</h1>
    <form action="/veiculo/new" method="post">
        @csrf
        <p> 
        <select name="veiculo" id="veiculo">
            @foreach ($proprietarios as $proprietario)
            <option value="{{$proprietario->id}}">{{$proprietario->nome}}</option>
            @endforeach 
        </select>
        </p>
        <p>Modelo: <input type="text" name="modelo" id="modelo"></p>
        <p>Marca: <input type="text" name="marca" id="marca"></p>
        <p>Ano de Fabricação: <input type="number" name="anofabricado" id="anofabricado"></p>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>