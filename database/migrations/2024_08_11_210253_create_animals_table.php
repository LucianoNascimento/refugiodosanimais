<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50)->comment('nome do animal');
            $table->string('especie', 50)->comment('gato,cachorro, etc');
            $table->string('raca', 50)->comment('raca do animal');
            $table->integer('idade')->nullable()->comment('idade do animal');
            $table->string('sexo', 30)->comment('pequeno, medio, grande');
            $table->string('cor', 30)->nullable()->comment('preto, branca');
            $table->string('tamanho', 30)->comment('pequeno, medio, grande');
            $table->text('descricao')->nullable()->comment('detalhes do animal');
            $table->dateTime('data_entrada')->comment('data de chegou para adoção');
            $table->string('status',50)->comment('disponível, adotado, em tratamento, etc.');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
