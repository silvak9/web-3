<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogador</title>
</head>
<body>
    <h1>Editar Jogadores:</h1>
    <form action="/jogador/{{$jogador->id}}" method="post">
        @csrf
        @method('put')
        <p>
            <select name="jogador" id="jogador">
                @foreach($times as $time)
                <option value="{{$time->id}}" {{$jogador->time->id == $time->id ? 'selected': ''}}>{{$time->nome}}</option>
                @endforeach
            </select>
        </p>
        <p>
            Nome: <input type="text" name="nome" id="nome" value="{{$jogador->nome}}">
        </p>
        <p>
            Posição: <input type="text" name="posicao" id="posicao" value="{{$jogador->posicao}}">
        </p>
        <p>
            Idade: <input type="number" name="idade" id="idade" value="{{$jogador->idade}}">
        </p>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>