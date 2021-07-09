<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiquetes', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_viaje');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha');
            $table->string('estado');
            $table->bigInteger('total');
            $table->integer('user_id');
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
        Schema::dropIfExists('tiquetes');
    }
}
