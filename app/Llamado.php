<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamado extends Model
{
    protected $table = 'llamados';

    public static function obtener_Detalle_guias()
    	return $this->morphedByMany('App\Detalle_guias');

    public static function obtener_Producto()
    	return $this->morphedByMany('App\Producto');

    public static function obtener_Cliente()
    	return $this->morphedByMany('App\Cliente');
}
