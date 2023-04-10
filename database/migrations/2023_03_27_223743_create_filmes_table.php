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
            $table->string('atoresfilme');
            $table->longText('sinopsefilme');
            $table->date('datalancamentofilme');
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
