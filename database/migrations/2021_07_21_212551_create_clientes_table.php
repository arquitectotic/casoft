<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
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

            $table->unsignedBigInteger('tipo_documento_id')->nullable();
            $table->foreign('tipo_documento_id')
                ->references('id')
                ->on('documentos')
                ->onDelete('set null');

            $table->string('primer_nombre',15);
            $table->string('segundo_nombre',15);
            $table->string('primer_apellido',15);
            $table->string('segundo_apellido',15);
            $table->string('telefono',15);
            $table->string('celular',15);
            $table->string('email',50)->unique();
            $table->string('direccion',50);
            $table->string('municipio',20);
            $table->string('empresa',20);

            $table->unsignedBigInteger('actividad_id')->nullable();
            $table->foreign('actividad_id')
                ->references('id')->on('actividads')
                ->onDelete('set null');
            
            $table->string('observacion',100);

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
