<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
| protected $fillable = ['nombre','rut','razon_social','telefono','correo','rep_legal','comuna_id','direccion'];
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Producto::class, function (Faker\Generator $faker) {
   
/*
    protected $table = 'producto';
    protected $fillable = ['nombre'];
*/
    return [
        'nombre' => $faker->unique()->firstNameMale .'_producto',
     
    ];
});
