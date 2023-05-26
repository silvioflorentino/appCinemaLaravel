<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class filmeController extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme' => 'string|required',
            'datalancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'file|required'
        ]);
       // dd($dadosFilme);

        $file = $dadosFilme['capafilme'];
        $path = $file->store('capa','public');
        $dadosFilme['capafilme'] = $path;
        
        Filme::create($dadosFilme);

        //return Redirect::route('/home');
    }
    public function exibirFilme(){

        $dadosfilme = Filme::query();

        $dadosfilme = $dadosfilme->get();

        return view('site/index',['dadosfilme'=>$dadosfilme]);
     
    }

}
