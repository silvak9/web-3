@extends('layouts.base')
@section('content')
<div class="alert alert-primary" role="alert">Seja bem vindo {{$nome}}</div>
<div class="alert alert-success" role="alert">
    Seu IMC é {{number_format ($imc,2,'.','')}},
    @if ($imc < 18.5)
    Você esta muito magro.
    @elseif ($imc < 24.9)
    Você esta no seu peso ideal.
    @elseif ($imc < 29.9)
    Você esta com sobrepeso.
    @elseif ($imc < 34.9)
    Você está com obesidade grau 1.
    @elseif ($imc < 39.9)
    Você está com obesidade grau 2.
    @elseif ($imc > 40)
    Você está com obesidade grau 3.
    @endif
</div>
<a href="/" title="Calcular Novamente">Calcular Novamente.</a>