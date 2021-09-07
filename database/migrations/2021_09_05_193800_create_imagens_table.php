<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proyecto')->unsigned()->comment('id del proyecto al que pertenece la imagen');
            $table->string('imagen_lateral1')->comment('Imagen lateral del proyecto');
            $table->string('imagen_lateral2')->comment('Imagen lateral del proyecto');
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id')->on('proyectos');
        });
        DB::statement("ALTER TABLE imagens comment 'Tabla donde se registran las imagenes de los proyectos'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagens');
    }
}
