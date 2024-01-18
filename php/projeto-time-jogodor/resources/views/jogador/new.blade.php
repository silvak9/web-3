<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar jogador</title>
</head>
<body>
    <h1>Cadastrar Jogador</h1>
    <form action="/jogador/new" method="post">
        @csrf
        <p>
            <select name="jogador" id="jogador">
                @foreach($jogadores as $jogador)
                <option value="{{$jogador->id}}">{{$jogador->nome}}</option>
                @endforeach
            </select>
        </p>
    </form>

</body>
</html>