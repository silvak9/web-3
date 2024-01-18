<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetanguloController extends Controller
{
    public function show(){
        return view('retangulo');
    }

    public function calcularArea(Request $request){
        $base = $request->base;
        $altura = $request->altura; 

        $area = ($base*$altura);

        $dados = $request->all();
        $dados['area'] = $area;

        return view('telaArea',$dados);
    }
}
