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
        Schema::create('veterinarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50)->nullable()->comment('nome do veterinario');
            $table->string('crm',50)->nullable()->comment('crm do veterinario');
            $table->string('telefone',20)->nullable()->comment('telefone do veterinario');
            $table->string('email',20)->nullable()->comment('telefone do veterinario');
            $table->string('tratamento')->nullable()->comment('telefone do veterinario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarios');
    }
};
