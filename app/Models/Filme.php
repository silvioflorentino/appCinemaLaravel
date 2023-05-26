<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    protected $fillable =[
        'nomefilme','generofilme','distribuidorafilme','diretorfilme','classificacaofilme','duracaofilme','sinopsefilme','categoria', 'capafilme'
    ];
}
