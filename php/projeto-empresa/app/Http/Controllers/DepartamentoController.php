<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;


class DepartamentoController extends Controller
{
    public function index(){
        $departamentos = Departamento::orderBy('nome', 'ASC')->with('funcionarios')->get();
        $dados = ['departamentos'=> $departamentos];
        return view('departamento.index', $dados);
    }

    public function new(){
        return view('departamento.new');
    }

    public function store(Request $request){
        $departamento = new Departamento();
        $departamento->nome = $request->nome;
        $departamento->save();
        return redirect('/departamento')->with('msg','Departamento cadastrado com sucesso');

    }

    public function destroy($id){
        Departamento::findOrFail($id)->delete();
        return redirect('/departamento')->with('msg','Departamento Excluido com sucesso.');
    }

    public function edit($id){
        $departamento = Departamento::findOrFail($id);
        return view('departamento.edit', ['departamento' => $departamento]);
    }

    public function update(Request $request){
        $departamento = Departamento::findOrFail($request->id);
        $departamento->nome = $request->nome;
        $departamento->save();
        return redirect('/departamento')->with('msg','Departamento alterado.');
    }
}
