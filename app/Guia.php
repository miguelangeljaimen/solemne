<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    //




    public static function obtenerCliente(){
        return $this->belongsTo('App\Cliente');
    }
}
