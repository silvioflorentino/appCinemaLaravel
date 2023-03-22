<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroFuncionarioModel extends Model
{
    use HasFactory;

    protected $fillable =[
        'nome_fun','email_fun','whatsapp_fun','cpf_fun','senha_fun'
    ];
}
