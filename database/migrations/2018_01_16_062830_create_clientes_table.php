<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf', 15)->nullable()->comment('CPF do cliente, não é obrigatório')->default('0');
            $table->string('endereco')->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('telefone', 45)->nullable();
            $table->string('celular', 45)->nullable();
            $table->decimal('limite', 10, 2)->nullable()->default('0');
            $table->tinyInteger('status')->nullable()->comment('0-Inavito, 1-Ativo')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
