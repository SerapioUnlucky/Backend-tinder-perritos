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
        Schema::create('interaccion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("perr_interesado");
            $table->unsignedBigInteger("perr_candidato");
            $table->foreign('perr_interesado')->references('id')->on('perros');
            $table->foreign('perr_candidato')->references('id')->on('perros');
            $table->string("preferencia",255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interaccions');
    }
};
