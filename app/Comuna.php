<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comunas';

    protected $fillable = ['nombre'];

    public function obtenerProvincia(){
    	return $this->belongsTo('App\Provincia');
    }

    public function obtenerClientes(){
    	return $this->hasMany('App\Clientes');
    }

}
