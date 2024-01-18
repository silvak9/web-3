<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento</title>
</head>
<body>
<h1>Departamentos</h1>
    <a href="/departamento/new">Cadastrar Departamento</a>
    @if (Session::has('msg'))
        <script>window.alert('{{ Session::get("msg")}}')</script>
    @endif
    <ul>
        @foreach($departamentos as $departamento)
            <ol>
                @foreach($departamento->funcionarios as $funcionario)
                    <li>{{$funcionario->nome}} - {{$funcionario->cargo}}</li>
                @endforeach
            </ol>
        @endforeach
    </ul>
    <table>
    <thead>
        <tr>
            <th>Nome do Departamento</th>
            <th>Exclusao</th>
            <th>Edição</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departamentos as $departamento)
            <tr>
                <td>{{$departamento->nome}}</td>
                <td>
                    <form action="/departamento/{{$departamento->id}}" method="post" onSubmit="return confirm('Tem certeza que deseja excluir este departamento?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td> <!-- Substitua por código real de exclusão -->
                <td>
                    <form action="/departamento/{{$departamento->id}}" method="post">
                        @csrf
                        @method('GET')
                        <Button type="submit">Editar</Button>
                    </form>
                </td> <!-- Substitua por código real de edição -->
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>