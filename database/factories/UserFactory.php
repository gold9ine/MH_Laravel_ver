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
	$num = $faker->unique()->randomDigitNotNull();

    return [
        'name' => 'user' . $num,
        // 'email' => $faker->unique()->safeEmail,
        'email' => 'user'. $num . '@email.com',
        'picture' => 'user-default-img'. $num . '.png',
        'password' => bcrypt('password'), // secret
        'remember_token' => str_random(10),
    ];
});
