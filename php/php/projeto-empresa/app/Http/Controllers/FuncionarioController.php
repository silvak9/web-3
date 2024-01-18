<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(){
        $funcionarios = Funcionario::orderBy('nome', 'ASC')->with('departamento')->get();
        $dados = ['funcionarios' => $funcionarios];
        return view('funcionario.index', $dados);
    }

    public function new(){
        $departamentos = Departamento::orderBy('nome')->get();
        return view('funcionario.new', ['departamentos'=>$departamentos]);
    }

    public function store(Request $request){
        $funcionario = new Funcionario();
        $funcionario->nome = $request->nome;
        $funcionario->departamentos_id = $request->departamento;
        $funcionario->cargo = $request->cargo;
        $funcionario->save();
        return redirect('/funcionario')->with('msg', 'Funcionario cadastrado com sucesso.');
    }
}
