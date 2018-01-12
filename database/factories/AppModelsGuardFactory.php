<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Guard::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'user_id' => \App\Models\User::inRandomOrder()->first()->id
    ];
});
