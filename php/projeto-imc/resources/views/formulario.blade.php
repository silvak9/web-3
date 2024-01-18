@extends('layouts.base');
@section('content');
<h1>Calcule o seu indice de massa corporal</h1>
<form action="/imc" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class='form-control' id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="altura">Altura</label>
        <input type="text" class="form-control" id="altura" name="altura" placeholder="Altura (metros)">
    </div>
    <div class="form-group">
        <label for="peso">Peso</label>
        <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso (Kg)">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>
@stop