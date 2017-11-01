<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        
        Schema::create('producto_cliente', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            
            $table->integer('stock_min');
            $table->integer('stock_actual');
            $table->integer('promedio');
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
        Schema::dropIfExists('productos');
    }
}
