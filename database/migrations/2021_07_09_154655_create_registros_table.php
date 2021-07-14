<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_registro');
            $table->time('hora_registro')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_servicio');
            $table->foreign('id_servicio')
                ->references('id')
                ->on('servicios')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('id_poliza');
            $table->foreign('id_poliza')
                ->references('id')
                ->on('polizas')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('id_canal');
            $table->foreign('id_canal')
                ->references('id')
                ->on('canals')
                ->onDelete('cascade');
                
            $table->unsignedBigInteger('id_contacto');
            $table->foreign('id_contacto')
                ->references('id')
                ->on('contactos')
                ->onDelete('cascade');    
                
            $table->string('zona_contacto',50);

            $table->unsignedBigInteger('id_accion');
            $table->foreign('id_accion')
                ->references('id')
                ->on('accions')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_etapa');
            $table->foreign('id_etapa')
                ->references('id')
                ->on('etapas')
                ->onDelete('cascade');

            $table->date('fecha_proxima_accion');
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
        Schema::dropIfExists('registros');
    }
}
