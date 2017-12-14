<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamado extends Model
{

	/*
	Schema::create('llamados', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');


            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');

                                    


            $table->timestamps();
        });
	*/
    
    protected $table = 'llamados';
    protected $fillable = ['cliente_id','producto_id'];


    public static function obtenerProducto(){
    	return $this->belongsTo('App\Producto');
    }

    public static function obtenerCliente(){
    	return $this->belongsTo('App\Cliente');
    }
}
