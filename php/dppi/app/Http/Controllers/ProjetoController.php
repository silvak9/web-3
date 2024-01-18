<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index(){
        $projetos = Projeto::all();
        return view('home', ['projetos' => $projetos]);
    }

    public function create(){
        return view('new');
    }

    public function store(Request $request){
        $projeto = new Projeto();

        $projeto->titulo = $request->titulo;
        $projeto->orientador = $request->orientador;
        $projeto->bolsistas = $request->bolsistas;
        $projeto->descricao = $request->desc;
        $projeto->save();

        return redirect('/')->with('msg', 'Projeto cadastrado com sucesso.');
    }

    public function destroy($id){
        Projeto::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Projeto excluido com sucesso');
    }

    public function edit($id){
        $projeto = Projeto::findOrFail($id);
        return view('edit', ['projeto' => $projeto]);
    }

    public function update(Request $request){
        $projeto = Projeto::findOrFail($request->id);
        $projeto->titulo = $request->titulo;
        $projeto->orientador = $request->orientador;
        $projeto->bolsistas = $request->bolsistas;
        $projeto->descricao = $request->desc;
        $projeto->save();
        return redirect('/')->with('msg', 'Alterado com sucesso.');
    }
}
