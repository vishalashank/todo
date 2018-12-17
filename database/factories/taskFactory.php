<?php

use Faker\Generator as Faker;

$factory->define(App\task::class, function (Faker $faker) {
    return [
        //
        'client_id' => App\client::pluck('id')->random(),
        'title' => $faker->sentence,
    ];
});
