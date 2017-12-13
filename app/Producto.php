<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//          $table->increments('id');
//          $table->string('nombre');
//            $table->timestamps();


class Producto extends Model
{
 /*
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
 */   
	protected $table = 'productos';
    protected $fillable = ['nombre'];


    public static function obtenerClientes(){
        return $this->hasMany('App\Cliente');
    }

    public static function obtenerDetalles(){
        return $this->hasMany('App\Detalle_guia');
    }

    public static function obtenerLlamados(){
        return $this->hasMany('App\Llamado');
    }

}
