<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Livre;
use App\User;
use Faker\Generator as Faker;

$factory->define(Livre::class, function (Faker $faker) {
    return [
        'livre' => $faker->name,
        'annee' => $faker->date,
        'auteur' => $faker->name,
    ];
});
