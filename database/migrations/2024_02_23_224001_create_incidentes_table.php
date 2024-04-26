<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('descripcion');
            $table->string('prioridad',1);

            $table->integer('categoria_id')->unsigned()->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->integer('level_id')->unsigned()->nullable();
            $table->foreign('level_id')->references('id')->on('levels');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');

            $table->integer('support_id')->unsigned()->nullable();
            $table->foreign('support_id')->references('id')->on('users');


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
        Schema::dropIfExists('incidentes');
    }
}
