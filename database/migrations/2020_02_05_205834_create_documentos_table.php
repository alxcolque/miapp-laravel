<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('nombre',50);
            $table->string('descripcion',255);
            $table->dateTime('fecha_alta', 0);
            $table->dateTime('fecha_modificacion', 0);
            $table->string('url',50);
            $table->integer('cantidad');
            
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('tipo_id')
                ->references('id')->on('tipos')
                ->onDelete('cascade');
            $table->foreign('usuario_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
