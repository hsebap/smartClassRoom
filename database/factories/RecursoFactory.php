<?php

use Faker\Generator as Faker;

$factory->define(App\Recurso::class, function (Faker $faker) {
    return [
        'codigo'=>$faker->unique()->isbn10,
        'descripcion'=>$faker->sentence(5,true),
        'aula_id'=>$faker->numberBetween(1,50),
    ];
});
