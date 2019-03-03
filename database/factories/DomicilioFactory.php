<?php

use Faker\Generator as Faker;

$factory->define(App\Domicilio::class, function (Faker $faker) {
    return [
        'calle'=>$faker->streetName(200),
        'numero'=>$faker->numberBetween(1,4000),
        'piso'=>$faker->numberBetween(1,100),
        'departamento'=>$faker->randomLetter,
        'manzana'=>$faker->randomLetter,
        'lote'=>$faker->randomLetter,
        'ciudad'=>$faker->city,
        'persona_id'=>$faker->numberBetween(1,200),
    ];
});
