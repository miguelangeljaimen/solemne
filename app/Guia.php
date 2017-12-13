<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{

	/*
	        Schema::create('guias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');                        

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');            
            
            $table->timestamps();
        });
	*/
    
    protected $table = 'guias';
    protected $fillable = ['cliente_id','user_id'];

    public static function obtenerCliente(){
        return $this->belongsTo('App\Cliente');
    }
    public static function obtenerUser(){
        return $this->belongsTo('App\User');
    }
    public static function obtenerDetalle(){
        return $this->belongsTo('App\Detalle');
    }
}
