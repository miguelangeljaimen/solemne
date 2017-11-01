<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLlamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llamados', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');


            $table->integer('producto_id')->unsigned();
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
        Schema::dropIfExists('llamados');
    }
}
