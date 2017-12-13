<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_guia extends Model
{

/*
Schema::create('detalle_guias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('guia_id')->unsigned();
            $table->foreign('guia_id')->references('id')->on('guias');                        


            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');                        


            $table->integer('cantidad');

            $table->timestamps();
        });
*/
	protected $table = 'clientes';

    protected $fillable = ['guia_id','producto_id','cantidad']

    public static function obtenerProducto(){
    return $this->belongsTo ('App\Producto');
	}
    
    public static function obtenerGuias(){
    return $this->hasMany ('App\Guia');
	}
   
   } 