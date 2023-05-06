<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }

    public function salvarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme' => 'string|required',
            'dataLancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'string|required'
        ]);
        $file = $dadosFilme['capafilme'];
        $path = $file->store('capas', 'public');

        $dadosFilme['capafilme'] = $path;
        Filme::create($dadosFilme);

        return Redirect::route('/home');
    }

}
