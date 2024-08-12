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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email', 50)->unique();
            $table->string('cpf', 14)->unique();
            $table->string('telefone', 20);
            $table->string('cep',20);
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->date('data_de_nascimento');
            $table->integer('status')->default('1')->comment('status do usuario');
            $table->string('tipo')->comment('tipo de usuario');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('observacoes')->nullable()->comment('caso o usuario seja deletado informar o motivo');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

/*
 * CPF (ou outro identificador único)
Endereço
Data_Nascimento
Observações (informações adicionais, se necessário)
*/

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
