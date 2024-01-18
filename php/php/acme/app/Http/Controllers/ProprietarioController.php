<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proprietario;

class ProprietarioController extends Controller
{
    public function index(){
        $proprietarios = Proprietario::orderBy('nome', 'asc')->with('veiculos')->get();
        $dados = ['proprietarios' => $proprietarios];
        return view('proprietario.index', $dados);
    }

    public function new(){
        return view('proprietario.new');
    }

    public function store(Request $request){
        $proprietario = new Proprietario();
        $proprietario->nome = $request->nome;
        $proprietario->save();
        return redirect('/proprietario')->with('msg', 'Proprietário salvo com sucesso.');
    }

    public function destroy($id){
        Proprietario::findorFail($id)->delete();
        return redirect('/proprietario')->with('msg', 'Proprietário excluído com sucesso.');
    }

    public function edit($id){
        $proprietario = Proprietario::findorFail($id);
        return view ('proprietario.edit', ['proprietario' => $proprietario]);
    }

    public function update(Request $request){
        $proprietario = Proprietario::findorFail($request->id);
        $proprietario->nome = $request->nome;
        $proprietario->save();
        return redirect('/proprietario')->with('msg', 'Proprietário editado.');
    }
}
