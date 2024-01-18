<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/funcionario/store" method="post">
        @csrf
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>
        <label for="cargo">Cargo: </label>
        <input type="text" name="cargo" id="cargo"><br>
        <label for="departamento">Departamento</label>
        <select name="departamento" id="departamento">
            @foreach ($departamentos as $departamento)
            <option value="{{$departamento->id}}">{{$departamento->nome}}</option>
            @endforeach
        </select><br>
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>