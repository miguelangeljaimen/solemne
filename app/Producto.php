<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//          $table->increments('id');
//          $table->string('nombre');
//            $table->timestamps();


class Producto extends Model
{
    
	protected $table = 'producto';

    public static function obtenerCliente(){
        return $this->belongsTo('App\Cliente');
    }
}
