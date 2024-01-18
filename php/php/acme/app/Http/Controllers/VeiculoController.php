<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proprietario;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function index(){
        $veiculos = Veiculo::orderBy('modelo', 'asc')->with('proprietario')->get();
        $dados = ['veiculos' => $veiculos];
        return view('veiculo.index', $dados);
    }

    public function new(){
        $proprietarios = Proprietario::orderBy('nome')->get();
        //$x =  ['proprietarios' => $proprietarios]
        return view('veiculo.new',['proprietarios' => $proprietarios]);  
    }

    public function store(Request $request){
        $veiculo = new Veiculo();
        $veiculo->modelo = $request->modelo;
        $veiculo->proprietarios_id = $request->proprietario;
        $veiculo->save();
        return redirect('/veiculo')->with('msg', 'Veículo salvo com sucesso.');
    }

    public function destroy($id){
        Veiculo::findorFail($id)->delete();
        return redirect('/')->with('msg', 'Veículo excluído com sucesso');
    }

    public function edit($id){
        $veiculo = Veiculo::findorFail($id);
        $x = ['veiculo' => $veiculo];
        $proprietarios = Proprietario::all();
        $x['proprietarios'] = $proprietarios; 
        return view ('veiculo.edit', $x);
    }

    public function update(Request $request){
        $veiculo = Veiculo::findorFail($request->id);
        $veiculo->modelo = $request->modelo;
        $veiculo->proprietarios_id = $request->proprietario;
        $veiculo->save();
        return redirect('veiculo.edit')->with('msg', 'Veículo editado.');
    }
}
