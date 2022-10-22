<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_entrada_salidas', function (Blueprint $table) {
            $table->id();
            $table->integer("cantidad");

            $table->foreignId('id_entreada_salida')->constrained('entrada_salida_equipos');
            $table->foreignId('equipos_id')->constrained('equipos');
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
        Schema::dropIfExists('det_entrada_salidas');
    }
};
