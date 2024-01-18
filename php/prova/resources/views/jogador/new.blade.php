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
                @foreach($times as $time)
                <option value="{{$time->id}}">{{$time->nome}}</option>
                @endforeach
            </select>
        </p>
        <p>
            Nome: <input type="text" name="nome" id="nome">
        </p>
        <p>
            Posição: <input type="text" name="posicao" id="posicao">
        </p>
        <p>
            Idade: <input type="number" name="idade" id="idade">
        </p>
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>