<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
*/

$factory->define(\Vilbur\Biography\Models\Biography::class, function (Faker $faker) {
    return [
		'client'	=> $faker->company,
		'job_title'	=> $faker->jobTitle,
		'image'	=> "https://picsum.photos/256/256?image=" . $faker->numberBetween(1, 100),
		'summary'	=> $faker->sentence(6, true),
		'description'	=> $faker->text(128),
		'since'	=> $faker->date('Y-m-d', 'now'),
		'until'	=> $faker->date('Y-m-d', 'now'),
    ];
});
