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
        Schema::create('tipo_juego', function (Blueprint $table) {
            $table->id('id_tipo_juego');  
            $table->string('nombre_tipo_juego',255);
            $table->timestamps();

            $table->unsignedInteger('id')->nullable();
            $table->foreign('id')->reference('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_juego');
    }
};
