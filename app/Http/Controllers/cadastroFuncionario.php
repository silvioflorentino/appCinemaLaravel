<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastroFuncionarioModel;

class cadastroFuncionario extends Controller
{
    public function buscarCadastroFuncionario(){
        return View('cadastroFuncionario');
    }

    public function cadastrarFuncionario(Request $request){
        $dadosfuncionarios = $request->validate(
            [
                'emailfun'=> 'string|required',
                'nomefun'=> 'string|required',
                'senhafun'=> 'string|required',
                'whatsappfun'=> 'string|required',
                'cpffun'=> 'string|required'
            ]
            );
            cadastroFuncionarioModel::create($dadosfuncionarios);
        return Redirect::route('/home');
    }
}
