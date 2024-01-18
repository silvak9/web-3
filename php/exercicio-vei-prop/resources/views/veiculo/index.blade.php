<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiculos</title>
</head>
<body>
    <h1>Veiculos</h1>
    <p>
        <a href="/veiculo/new">Cadastrar Veiculo</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Proprietario</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Ano Fabricação</th>
                <th>Editar</th>
                <th>Exclusão</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
            <tr>
                <td>{{$veiculo->proprietario->nome}}</td>  
                <td>{{$veiculo->modelo}}</td>
                <td>{{$veiculo->marca}}</td>
                <td>{{$veiculo->anoFabricacao}}</td>
                <td>
                    <form action="/veiculo/{{$veiculo->id}}" method="post" onSubmit="return confirm('Deseja realmente excluir este veiculo?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">excluir</button>
                    </form>
                </td>
                <td>
                    <form action="/veiculo/{{$veiculo->id}}" method="get">
                        @csrf
                        <button type="submit">Editar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>