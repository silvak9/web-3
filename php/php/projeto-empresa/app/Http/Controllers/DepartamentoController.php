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
}
