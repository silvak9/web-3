<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index(){
        $veiculos = Veiculo::orderBy('modelo','ASC')->with('proprietario')->get();
        return view('veiculo.index', ['veiculos' => $veiculos]);
    }

    public function new(){
        $proprietarios = Proprietario::orderBy('nome')->get();
        return view('veiculo.new', ['proprietarios' => $proprietarios]);
    }

    public function store(Request $request){
        $veiculo = new Veiculo();
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->anoFabricacao= $request->anofabricado;
        $veiculo->proprietarios_id = $request->veiculo;
        $veiculo->save();
        return redirect('/')->with('msg', 'Veiculo cadastrado com sucesso.');
    }

    public function destroy($id){
        Veiculo::findOrFail($id)->delete();
        return redirect('/')->with('msg','Veiculo excluido com sucesso.');
    }

    public function edit($id){
        $veiculo = Veiculo::findOrFail($id);
        $proprietario = Proprietario::all();
        return view('veiculo.edit', ['veiculo' => $veiculo,'proprietario'=> $proprietario]);
    }

    public function update(Request $request){
        $veiculo = Veiculo::findOrFail($request->id);
        $veiculo->proprietarios_id = $request->veiculo;
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->anoFabricacao = $request->anofabricado;
        $veiculo->save();
        return redirect('/')->with('msg', 'Veiculo atualizado com sucesso.');
    }
}
