<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    public function index(){
        $proprietarios = Proprietario::all();
        $dados = ['proprietarios' => $proprietarios];
        return view('proprietario.index', $dados);
    }

    public function new(){
        return view('proprietario.new');
    }

    public function store(Request $request){
        $proprietario = new Proprietario();
        $proprietario->nome = $request->nome;
        $proprietario->idade = $request->idade;
        $proprietario->save();
        return redirect('/')->with('msg','Proprietario cadastrado com sucesso');
    }

    public function edit($id){
        $proprietario = Proprietario::findOrFail($id);
        return view('proprietario.edit', ['proprietario' => $proprietario]);
    }

    public function destroy($id){
        Proprietario::FindOrFail($id)->delete();
        return redirect('/')->with('msg', 'Proprietario excluido com sucesso.');
    }

    public function update(Request $request){
        $proprietario = Proprietario::FindOrFail($request->id);
        $proprietario->nome = $request->nome;
        $proprietario->idade = $request->idade;
        $proprietario->save();
        return redirect('/')->with('msg','Proprietário alterado com sucesso.');
    }
}
