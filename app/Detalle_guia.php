<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_guia extends Model
{

	protected $table = 'clientes';

    protected $fillable = ['cantidad']

    public static function obtenerProducto(){
    return $this->morphedByMany ('App\Producto');
}
    public static function obtenerGuias(){
    return $this->morphedByMany ('App\Guias');
}
    public satic function obtener llamados(){
    return $this->morphedByMany('App\llamados');
}
   } 