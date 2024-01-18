<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller
{
    public function show(){
        return view('formulario');
    }

    public function calcularIMC(Request $request){
        //Método input retorna um valor especifico
        $nome = $request->input('nome');
        // propriedades dinâmicas
        $peso = $request->peso;
        $altura = $request->altura;
        $imc = $peso/($altura*$altura);
        
        $dados = $request->all();
        $dados['imc'] = $imc;
        return view('telaIMC', $dados);
    }
    
}
