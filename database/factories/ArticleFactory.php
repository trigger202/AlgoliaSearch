<?php

  use Faker\Generator as Faker;

  $factory->define(App\Article::class, function (Faker $faker) {
    return [
      'title' => $faker->title,
      'body' => $faker->paragraph,
      'created_at' => now(),
      'updated_at' => now(),
    ];
  });
