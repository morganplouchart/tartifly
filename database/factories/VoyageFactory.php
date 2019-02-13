<?php

use Faker\Generator as Faker;

$factory->define(App\Voyage::class, function (Faker $faker) {
    return [
        'libelle' => $faker->name,
        'pays' => $faker->countryCode,
        'duree' => $faker->dateTime,
        'cout' => $faker->randomDigit,
        'photo' => $faker->imageUrl(640, 480, 'city'),
        'description' => $faker->sentence,
        'disponibilite' => true
    ];
});
