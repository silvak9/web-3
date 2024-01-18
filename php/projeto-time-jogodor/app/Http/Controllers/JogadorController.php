<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function Index(){
        $jogadores = Jogador::orderBy('nome', 'ASC')->with('time')->get();
        return view('jogador.index', ['jogadores' => $jogadores]);
    }

    public function new(){
        return view('jogador.new');
    }
}
