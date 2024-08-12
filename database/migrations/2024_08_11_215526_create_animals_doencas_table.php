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
        Schema::create('animals_doencas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_animal');
            $table->unsignedBigInteger('id_doenca');
            $table->date('data_diagnostico')->nullable();
            $table->timestamps();

            $table->foreign('id_animal')->references('id')->on('animals')->onDelete('cascade');
            $table->foreign('id_doenca')->references('id')->on('doencas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals_doencas');
    }
};
