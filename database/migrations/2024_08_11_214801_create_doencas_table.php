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
        Schema::create('doencas', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('descricao');
            $table->timestamps();
        });
    }
/*
 * Doença
ID_Doença (chave primária)
Nome
Descrição (detalhes sobre a doença)
Animal_Doença (associação entre Animal e Doença)
ID_Animal (chave estrangeira referenciando Animal)
ID_Doença (chave estrangeira referenciando Doença)
Data_Diagnóstico

 * */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doencas');
    }
};
