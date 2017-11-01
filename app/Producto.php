<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    

    public static function obtenerCliente(){
        return $this->belongsTo('App\Cliente');
    }
}
