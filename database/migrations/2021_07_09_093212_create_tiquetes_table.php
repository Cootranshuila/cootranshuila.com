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

            $table->integer('viaje_id');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha');
            $table->string('estado');
            $table->integer('cantidad');
            $table->bigInteger('total');

            $table->foreignId('users_id')
                ->constrained('users')
                ->cascadeOnDelete();

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
