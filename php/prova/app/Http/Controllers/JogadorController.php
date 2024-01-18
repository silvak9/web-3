<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use App\Models\Time;
use Illuminate\Http\Request;
use League\CommonMark\Node\NodeWalkerEvent;

class JogadorController extends Controller
{
    public function index(){
        $jogadores = Jogador::orderBy('nome', 'ASC')->with('time')->get();
        return view('jogador.index', ['jogadores' => $jogadores]);
    }

    public function new(){
        $times = Time::orderBy('nome')->get();
        return view('jogador.new', ['times' => $times]);
    }

    public function store(Request $request){
        $jogador = new Jogador();
        $jogador->times_id = $request->jogador;
        $jogador->nome = $request->nome;
        $jogador->posicao = $request->posicao;
        $jogador->idade = $request->idade;
        $jogador->save();
        return redirect('/')->with('msg', 'Jogador salvo com sucesso.');
    }

    public function edit($id){
        $jogador = Jogador::findOrFail($id);
        $times = Time::all();
        return view('jogador.edit', ['times' => $times, 'jogador' => $jogador]);
    }

    public function update(Request $request){
        $jogador = Jogador::findOrFail($request->id);
        $jogador->times_id = $request->jogador;
        $jogador->nome = $request->nome;
        $jogador->posicao = $request->posicao;
        $jogador->idade = $request->idade;
        $jogador->save();
        return redirect('/')->with('msg','alterado com sucesso');
    }

    public function destroy($id){
        Jogador::findOrFail($id)->delete();
        return redirect('/')->with('msg','jogador excluido.');
    }
}
