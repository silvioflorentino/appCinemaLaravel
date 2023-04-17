<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class funcionarioController extends Controller
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
            Funcionario::create($dadosfuncionarios);
        return Redirect::route('/home');
    }

    public function buscarFuncionario(){
        return view('gerenciadorFuncionario');
    }
                           
    public function MostrarGerenciadorFuncionario(Request $request){
        $dadosfuncionarios = Funcionario::all();
        dd(dadosfuncionarios);
        /*
        $dadosfuncionarios = Funcionario::query();
        $dadosfuncionarios->when($request->nomefun,function($query,$nomefuncionario ){
            $query->where('nomefun','like','%'.$nomefuncionario.'%');
        }); 

        $dadosfuncionarios = $dadosfuncionarios->get();

        return view('gerenciadorFuncionario');
        */
    }







}
