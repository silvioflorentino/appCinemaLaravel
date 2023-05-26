<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomefilme');
            $table->string('generofilme');
            $table->string('distribuidorafilme');
            $table->string('diretorfilme');
            $table->string('classificacaofilme');
            $table->string('duracaofilme');
            $table->longText('sinopsefilme');
            $table->date('categoria');
            $table->string('capafilme');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
