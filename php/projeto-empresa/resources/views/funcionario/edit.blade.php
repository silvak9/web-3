<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/funcionario/{{$funcionario->id}}" method="post">
        @csrf
        @method('put')
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="{{$funcionario->nome}}"><br>
        <label for="cargo">Cargo: </label>
        <input type="text" name="cargo" id="cargo" value="{{$funcionario->cargo}}"><br>
        <label for="departamento">Departamento</label>
        <select name="departamento" id="departamento">
            @foreach ($departamentos as $depart)
            <option value="{{$depart->id}}" {{ $funcionario->departamento->id == $depart->id ? 'selected' : '' }}>{{$depart->nome}}</option>
            @endforeach
        </select><br>
        <button type="submit">Salvar alterações</button>
    </form>
</body>
</html>