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
        Schema::create('tratamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_animal')->nullable();
            $table->unsignedBigInteger('id_veterinario')->nullable();
            $table->dateTime('data_inicio')->nullable();
            $table->dateTime('data_fim')->nullable();
            $table->text('descricao')->nullable();
            $table->string('medicacao')->nullable();
            $table->timestamps();

            $table->foreign('id_animal')->references('id')->on('animals');
            $table->foreign('id_veterinario')->references('id')->on('veterinarios');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratamentos');
    }
};
