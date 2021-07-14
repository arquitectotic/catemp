<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('documento',15)->unique();

            $table->unsignedBigInteger('id_tipo_documento');
            $table->foreign('id_tipo_documento')
                ->references('id')
                ->on('documentos')
                ->onDelete('cascade');

            $table->string('nombre',50);
            $table->string('telefono',15);
            $table->string('email',50)->unique();
            $table->string('direccion',50);
            $table->string('municipio',20);

            $table->unsignedBigInteger('id_estado_cliente');
            $table->foreign('id_estado_cliente')
                ->references('id')->on('estados')
                ->onDelete('cascade');

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
        Schema::dropIfExists('clientes');
    }
}
