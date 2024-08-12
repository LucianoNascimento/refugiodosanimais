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
        Schema::create('doacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_campanha');
            $table->integer('valor');
            $table->date('data_doacao');
            $table->string('tipo_doacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doacaos');
    }
};
