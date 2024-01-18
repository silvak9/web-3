@extends('layout.base');
@section('title', 'Editando o projeto' . $projeto->titulo);
@section('new', 'active');
@section('content')
<form action="/projetos/{{$projeto->id}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{$projeto->titulo}}">
    </div>
    <div class="form-group">
        <label for="orientador">Orientador</label>
        <input type="text" name="orientador" id="orientador" class="form-control" value="{{$projeto->orientador}}">
    </div>
    <div class="form-group">
        <label for="bolsistas">Número de bolsistas</label>
        <input type="number" name="bolsistas" id="bolsistas" class="form-control" value="{{$projeto->bolsistas}}">
    </div>
    <div class="form-group">
        <label for="desc">Titulo</label>
        <textarea type="text" name="desc" class="form-control">{{$projeto->descricao}}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Salvar alterações</button>
</form>
@endsection