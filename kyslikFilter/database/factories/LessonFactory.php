<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence,
        'body' => $faker->paragraph,
        'views' => $faker->numberBetween(4000,9000),
        'length' => $faker->numberBetween(300,700),
        'difficulty' =>$faker->randomElement(array('beginner', 'intermediate', 'advanced'))
    ];
});
