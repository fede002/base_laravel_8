<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->nullable();
            $table->string('nombre_completo')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->dateTime('usu_verificado')->nullable();
            $table->integer('tipo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('localidad')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->text('observacion')->nullable();
            $table->text('remember_token')->nullable();
            $table->text('email_verified_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
