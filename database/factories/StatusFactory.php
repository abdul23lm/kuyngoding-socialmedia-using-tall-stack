<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Timeline\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
    return [
        'hash' => \Str::random(32),
        'body' => $faker->sentence(),
        'user_id' => rand(1, 5)
    ];
});
