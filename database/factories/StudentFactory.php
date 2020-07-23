<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {

    // see https://github.com/fzaninotto/Faker fro faker documentation

    $classes = ['F1', 'F2', 'SO', 'JR', 'SR'];
    $entry_types = ['HS', 'TR', 'CS'];
    $credit_hours = [3, 6, 9, 12, 15, 18];
    $athlete_statuses = [true, false];
    // ('credit_hours_enrolled' >=12) ? "FT" : "PT";

    return [
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'class' => $faker->randomElement($classes),
        'entry_type' => $faker->randomElement($entry_types),
        'credit_hours_enrolled' => $faker->randomElement($credit_hours),

        //TODO - Add a ternary expression to calculate based on cr hrs??
        //TODO  - Or alternatively use make() and then save() and do a
        //TODO  function call in between to determine the DEPENDENT value
        // 'ft_pt_status' => $faker->,
        'is_an_athlete' => $faker->randomElement($athlete_statuses),
    ];
});
