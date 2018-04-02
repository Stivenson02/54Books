<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'password' => $password ?: $password = bcrypt('secret'),
      'remember_token' => str_random(10),
    ];
});
$factory->define(\App\Book::class, function (Faker\Generator $faker) {
    return [
      'name' => $faker->name,
      'autor' => $faker->name,
      'editorial' => $faker->name,
      'description' => $faker->name,
      'cover_page' => $faker->randomElement($array = array('images/m1.png', 'images/m3.png')),
      'coste' => $faker->numberBetween(5000, 200000),
      'code' => str_random(10),
      'descuento' => $faker->randomElement([0, 5, 10, 15, 20, 30]),
      'user_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
      'one_subtype_id' => $faker->numberBetween(1, 122),
      'two_subtype_id' => $faker->numberBetween(1, 122),
      'type_id' => $faker->numberBetween(1, 10),
      'status' => $faker->numberBetween(1, 5),
    ];
});
