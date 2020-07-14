<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('video_path');
            $table->string('descripcion');
            $table->string('resumen');
            $table->string('genero');
            $table->string('duracion');
            $table->double('precio', 8, 2);
            $table->foreignId('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreignId('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::drop('videos');
    }
}
