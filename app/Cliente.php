<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /*
		Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('rut');
            $table->string('razon_social');
            $table->string('telefono');
            $table->string('correo');
            $table->string('rep_legal');
            $table->integer('comuna_id')->unsigned();
            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->string('direccion');

            $table->timestamps();
    */

    protected $table = 'clientes';

    protected $fillable = ['nombre','rut','razon_social','telefono','correo','rep_legal','comuna_id','direccion'];

    public static function obtenerGuias(){
        return $this->hasMany('App\Guia');
    }

    public static function obtenerProductos(){
        return $this->hasMany('App\Producto');
    }

    public static function obtenerLlamados(){
        return $this->hasMany('App\Lamado');
    }

    public static function obtenerComuna(){
        return $this->belongsTo('App\Comuna');
    }

}