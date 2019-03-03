<?php

use Faker\Generator as Faker;

$factory->define(App\Aula::class, function (Faker $faker) {
    return [
        'codigo'=>$faker->unique()->isbn10,
        'ubicacion'=>$faker->sentence(3,true),
        'capacidad'=>$faker->randomNumber(array(20,40)),
    ];
});
