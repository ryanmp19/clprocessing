<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
	$ktp = '';

	for ($i=0; $i <= 16; $i++) {
		// get a random digit, but always a new one, to avoid duplicates
		$ktp .= $faker->randomDigit;
	}

	return [
		'customer_name' => $faker->name,
		'customer_ktp_number' => $ktp,
		'user_id' => App\User::all()->random()->id, 
	];
});
