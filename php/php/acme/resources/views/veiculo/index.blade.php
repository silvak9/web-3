<body>
    <h1>Veículos</h1>
    <a href="/veiculo/new">Cadastrar Veículo</a>
    @if (Session::has('msg'))
    <script>window.alert('{{Session::get("msg")}}')</script>
    @endif
    <table>
        <tr>
            <th>Modelo</th>
            <th>Proprietário</th>
            <th>Excluir</th>
            <th>Editar</th>
        </tr>
        <tr>    
        @foreach($veiculos as $veiculo)
        <td>{{$veiculo->modelo}}</td>
        <td>{{$veiculo->proprietario->nome}}</td>
        <td><a href="/veiculo/{{$veiculo->id}}">Editar</a></td>
        <td><form action="/veiculo/{{$veiculo->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button></td>    
        </tr>
        @endforeach
    </table>
<a href="/">Voltar</a>
</body>