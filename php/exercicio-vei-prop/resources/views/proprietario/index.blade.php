<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proprietários</title>
</head>
<body>
    <h1>Proprietários</h1>
    <p>
        <a href="/proprietario/new">Cadastrar Proprietários</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>nome</th>
                <th>idade</th>
                <th>botão Editar</th>
                <th>botão Excluir</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proprietarios as $proprietario)
            <tr>
                <td>{{$proprietario->nome}}</td>
                <td>{{$proprietario->idade}}</td>
                <td>
                    <form action="/proprietario/{{$proprietario->id}}" method="get">
                        @csrf
                        <button type="submit">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="/proprietario/{{$proprietario->id}}" method="post" onSubmit="return confirm('Tem certeza que deseja excluir este proprietário?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>