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

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
            
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');

            $table->unsignedBigInteger('plan_id')->nullable();
            $table->foreign('plan_id')
                ->references('id')
                ->on('plans')
                ->onDelete('set null');
            
            $table->unsignedBigInteger('poliza_id')->nullable();
            $table->foreign('poliza_id')
                ->references('id')
                ->on('polizas')
                ->onDelete('set null');

            $table->integer('afiliacion');
            $table->string('zona_contacto',50);

            $table->unsignedBigInteger('canal_id')->nullable();
            $table->foreign('canal_id')
                ->references('id')
                ->on('canals')
                ->onDelete('set null');
                
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')
                ->references('id')
                ->on('estados')
                ->onDelete('set null');    
                
            $table->unsignedBigInteger('accion_id')->nullable();
            $table->foreign('accion_id')
                ->references('id')
                ->on('accions')
                ->onDelete('set null');
            
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
