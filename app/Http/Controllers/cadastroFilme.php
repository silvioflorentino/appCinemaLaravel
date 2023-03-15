<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }
}
