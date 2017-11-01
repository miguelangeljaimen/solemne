<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetalleGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_guias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('guia_id')->unsigned();
            $table->foreign('guia_id')->references('id')->on('guias');                        


            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');                        


            $table->integer('cantidad');

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
        Schema::dropIfExists('detalle_guias');
    }
}
