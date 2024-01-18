<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KgController extends Controller
{
    public function show(){
        return view('kg');
    }

    public function conversor(Request $request){
        $kg = $request->kg;

        $milhas = ($kg/1.609344);

        $dados = $request->all();
        $dados['milhas'] = $milhas;

        return view('telaMilhas', $dados);
    }
}
