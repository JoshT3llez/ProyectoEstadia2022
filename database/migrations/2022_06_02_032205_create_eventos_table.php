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
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id_evento');	
            $table->string('nombre');
            $table->string('apellidos');
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaTermi');
            $table->string('LinkFace');
            $table->string('LinkTwit');
            $table->string('LinkInsta');
            $table->string('Descripcion',200);
            $table->string('id_imagen');
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
        Schema::dropIfExists('eventos');
    }
};
