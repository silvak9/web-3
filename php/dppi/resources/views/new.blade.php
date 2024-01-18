@extends('layout.base');
@section('title', 'Cadastro de Projeto de Pesquisa');
@section('new', 'active');
@section('content')
<form action="/projetos/save" method="post">
    @csrf
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" class="form-control">
    </div>
    <div class="form-group">
        <label for="orientador">Orientador</label>
        <input type="text" name="orientador" id="orientador" class="form-control">
    </div>
    <div class="form-group">
        <label for="bolsistas">Número de bolsistas</label>
        <input type="number" name="bolsistas" id="bolsistas" class="form-control">
    </div>
    <div class="form-group">
        <label for="desc">Titulo</label>
        <textarea type="text" name="desc" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>