<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable()->comment('Nome de exibição');
            $table->string('name')->comment('usuário de acesso');
            $table->string('email')->nullable();
            $table->string('password');
            $table->char('permissao', 1)->nullable()->comment('Permissões de Usuários')->default('U');
            $table->tinyInteger('status')->nullable()->comment('Status de Usuários')->default('0');
            $table->datetime('ultimologin')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
