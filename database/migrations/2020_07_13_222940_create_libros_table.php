<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_producto');
            $table->string('nombre');
            $table->string('editorial');
            $table->string('fechaPublicacion');
            $table->string('edicion');
            $table->string('genero');
            $table->string('descripcion');
            $table->string('autor');
            $table->decimal('precio',5,2);
            $table->integer('id_categoria');
            $table->integer('id_tipo');
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
        Schema::dropIfExists('libros');
    }
}
