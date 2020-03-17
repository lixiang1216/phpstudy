<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sample;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Sample::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->name,
        'email_verified_at' => now(),
        'test1' => Str::random(10),
        'test2' => Str::random(10),
        'test3' => Str::random(10)
    ];
});
