<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Person::class, function (Faker $faker) {
    return [
      'first_name' => $faker->firstName,
      'last_name' => $faker->lastName,
      'email' => $faker->email,
      'gender' => $faker->randomKey(array('Male', 'Female')),
      'rating' => $faker->numberBetween(1,100)
      ];
  });
