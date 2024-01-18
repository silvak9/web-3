<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Funcionarios</h1>
    <a href="/funcionario/new">Cadastrar Funcionarios</a>
    @if (Session::has('has'))
    <script>Window.alert('{{Session::get('msg')}}')</script>
    @endif
    <table>
        <tr>
            <th>Nome</th>
            <th>cargo</th>
            <th>Departamento</th>
        </tr>
        @foreach ($funcionarios as $funcionario)
        <tr>
            <td>{{$funcionario->nome}}</td>
            <td>{{$funcionario->cargo}}</td>
            <td>{{$funcionario->departamento->nome}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>