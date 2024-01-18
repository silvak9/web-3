<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Jogador</title>
</head>
<body>
    <h1>Pagina Jogadores.</h1>
    <p>
        <a href="/jogador/new">Cadastrar Jogador</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Posição</th>
                <th>Idade</th>
                <th>Time</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogadores as $jogador)
            <tr>
                <td>{{$jogador->nome}}</td>
                <td>{{$jogador->posicao}}</td>
                <td>{{$jogador->idade}}</td>
                <td>{{$jogador->time->nome}}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>