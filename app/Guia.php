<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $table = 'guias';
    protected $fillable = ['id'];

    public static function obtenerCliente(){
        return $this->belongsTo('App\Cliente');
    }
    public static function obtenerUser(){
        return $this->belongsTo('App\User');
    }
}
