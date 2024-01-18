<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Departamentos</h1>
    <a href="/departamento/new">Cadastrar Departamento</a>
    @if (Session::has('msg'))
        <script>window.alert('{{Session::get('msg')}}')</script>
    @endif
    <ul>
        @foreach($departamentos as $departamento)
            <li>{{$departamento->nome}}</li>
            <ol>
                @foreach($departamento->funcionarios as $funcionario)
                    <li>{{$funcionario->nome}} - {{$funcionario->cargo}}</li>
                @endforeach
            </ol>
        @endforeach
    </ul>
</body>

</html>