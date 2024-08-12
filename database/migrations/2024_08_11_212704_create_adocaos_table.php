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
        Schema::create('adocaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_animal');
            $table->unsignedBigInteger('id_adotante');
            $table->date('data_da_adocao');
            $table->string('status_adocao',20)->nullable()->comment('confirmada, pendente, cancelada');
            $table->text('observacao')->nullable()->comment('confirmada, pendente, cancelada');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_animal')->references('id')->on('animals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_adotante')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adocaos');
    }
};
