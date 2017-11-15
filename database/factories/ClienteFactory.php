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
$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
   

    return [
        'nombre' => $faker->firstNameMale .' '. $faker->firstNameMale .' '. $faker->lastName,
        'rut' => $faker->numberBetween(111111111,999999999).'-'.$faker->numberBetween(0,9),
        'razon_social' => $faker->company,
        'telefono' => $faker->PhoneNumber,
        'correo' => $faker->unique()->safeEmail,
        'rep_legal' => $faker->firstNameMale .' '. $faker->firstNameMale .' '. $faker->lastName,
        'comuna_id' => $faker->numberBetween(1,346),
        'direccion' => $faker->Address,
    ];
});
