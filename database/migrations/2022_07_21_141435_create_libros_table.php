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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            
            $table->string('autor');
            $table->string('titulo');
            $table->integer('edicion',5);
            $table->string('datosDePublicación');
            $table->string('tipoDeContenido');
            $table->string('restricciones');
            $table->string('materia');
            $table->string('proveedor');
            $table->string('imagen');

            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
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
};
