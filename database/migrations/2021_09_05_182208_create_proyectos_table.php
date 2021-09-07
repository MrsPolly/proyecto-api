<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->comment('Logo de la empresa del proyecto');
            $table->string('titulo_proyecto')->comment('titulo del proyecto');
            $table->string('color_fondo')->comment('color a mostrar');
            $table->text('descripcion_corta')->comment('Descripción lateral del proyecto');
            $table->text('descripcion_larga')->comment('Detalle del proyecto');
            $table->boolean('activo')->default(1)->comment('Activar e inactivar la publicación');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE proyectos comment 'Tabla donde se registra la información de los proyectos a mostrar'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
