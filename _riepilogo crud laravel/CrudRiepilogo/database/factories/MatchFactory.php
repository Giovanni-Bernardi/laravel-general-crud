<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MyMatch;
use Faker\Generator as Faker;

$factory->define(MyMatch::class, function (Faker $faker) {
    return [
        'team1'=> $faker -> firstname,
        'team2'=> $faker -> lastname,
        'score1'=> $faker -> numberBetween(30, 100),
        'score2'=> $faker -> numberBetween(30, 100),
        'result'=> rand(0,1) == 0,
    ];
});

