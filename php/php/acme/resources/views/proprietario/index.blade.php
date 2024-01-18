<body>
    <h1>Proprietarios</h1>
    <a href="/proprietario/new">Cadastrar Proprietário</a>
    @if (Session::has('msg'))
    <script>window.alert('{{Session::get("msg")}}')</script>
    @endif
    <ul>
        @foreach($proprietarios as $proprietario)
        <li>{{$proprietario->nome}}</li>
        <ol>
            @foreach ($proprietario->veiculos as $veiculo)
            <li>{{$veiculo->modelo}}</li>
            @endforeach
</ol>
<li><form action="/proprietario/{{$proprietario->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button></li>
        <li>
        <a href="/proprietario/{{$proprietario->id}}">Editar</a>
        </li>
@endforeach
</ul>
<a href="/proprietario">Voltar</a>
</body>