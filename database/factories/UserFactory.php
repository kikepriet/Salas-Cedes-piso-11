<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Reservation::class, function (Faker $faker){
    return [
        'evento' => $faker->word,
        'responsable' => $faker->name,
        'dia' => $faker->dateTimeBetween('-7 days', '+7 days')->format('Y-m-d'),
        'hora_ini' => date('H:i', rand(1,54000)), // $faker->numberBetween(8, 18),
        'hora_fin' => date('H:i', rand(1,54000)), // $faker->numberBetween(8, 18),
        'sala' => $faker->numberBetween(1, 3)
    ];
});
