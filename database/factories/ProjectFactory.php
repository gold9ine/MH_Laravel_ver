<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
	$date = $faker->dateTimeThisMonth;
	$num = $faker->unique()->numberBetween($min = 1, $max = 40);
    // $genre = array("Jazz", "Blues", "R&B", "HipHop", "Pop", "Rock", "Electronic");
    // $genreKey = array_rand($genre, 1);
    $genre = rand(1,7);
	
    return [
    	'title' => $faker->sentence(),
    	'project_info' => $faker->paragraph(),
    	// 'genre' => $genre[$genreKey],
        'genre' => $genre,
    	'image_path' => 'albumimage' . $num . '.jpg',
    	'sound_path' => 'sound' . $num . '.mp3',
    	'created_at' => $date,
    	'updated_at' => $date,
    ];
});
