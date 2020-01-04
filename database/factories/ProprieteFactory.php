<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proprietes;
use Faker\Generator as Faker;

$factory->define(Proprietes::class, function (Faker $faker) {
    return [
        'localisation'=> $faker->words(2,true),
        'image'=> $faker->imageUrl(),
        'prix_min'=> $faker->numberBetween(1, 9999999),
        'prix_max'=> $faker->numberBetween(1, 9999999),
        'type_anonce'=> $faker->words(2,true),
        'nombre_chambre_min'=> $faker->numberBetween(100, 9999999),
        'nombre_chambre_max'=> $faker->numberBetween(100, 9999999),
        'salle_de_bain'=> $faker->numberBetween(1, 9999999),
        'superficie'=> $faker->numberBetween(5, 9999999),
        'users_id'=>1,
        'Type_de_proprietes_id'=>1,
        'description'=> $faker->paragraph(3,true),
       
    ];
}
);


