@extends('layout.base');
@section('title', 'DPPI: Controle de projetos');
@section('home', 'active');
@section('content')
@if(Session::has('msg'))
    <p class="alert alert-info">{{Session::get('msg')}}</p>
@endif
@if(count($projetos)>0)
    <table class="table table-striped">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Titulo do projeto</th>
            <th scope="col">Orientador</th>
        </thead>
        <tbody>
            @foreach($projetos as $projeto)
            <tr>
                <th scope="row">{{$projeto->id}}</th>
                <td>{{$projeto->titulo}}</td>
                <td>{{$projeto->orientador}}</td>
                <td>
                    <a href="/projetos/{{$projeto->id}}" title='Editar projeto {{$projeto->titulo}}' class="btn btn-secondary">Editar</a>
                </td>
                <td>
                    <form action="/projetos/{{$projeto->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este projeto')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" title="Excluir projeto {{$projeto->titulo}}">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-warning" role="alert">Não há projetos cadastrados</div>
@endif
@endsection