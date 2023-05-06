<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Models\Funcionario;

class cadastroFuncionario extends Controller
{
    public function buscarCadastroFuncionario(){
        return View('cadastroFuncionario');
    }

    public function salvarFuncionario(Request $request){
        $dadosfuncionarios = $request->validate(
            [
                'emailfun'=> 'string|required',
                'nomefun'=> 'string|required',
                'senhafun'=> 'string|required',
                'whatsappfun'=> 'string|required',
                'cpffun'=> 'string|required',
                'capafilme'=> 'file|required',
            ]
            );

          
        Funcionario::create($dadosfuncionarios);
        return Redirect::route('home');
    }
}
