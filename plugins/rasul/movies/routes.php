<?php

use Rasul\Movies\Models\Actor;


Route::get('seed-actors', function () {
    $faker = Faker\Factory::create();
    for ($i = 0; $i < 100; $i ++){

        $name = $faker->sentence($nbWords = 3, $variableNbWords = true);

        Actor::create([
            'name' => $faker->firstName,
            'lastname' => $faker->lastName

        ]);
    }

    return "Actors Created!";

});
