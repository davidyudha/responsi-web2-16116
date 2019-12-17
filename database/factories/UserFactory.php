<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Jobs;
use App\Employees;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
//  factory jobs
//  kolom 'name' => faker->jobTitle
$factory->define(Jobs::class, function (Faker $faker) {
    return [
        'id_jobs'=>faker->numberBetween(1,10),
       'name'=>$faker->jobTitle,
    ];
});
//  factory employees
//  kolom 'id_jobs' => faker->numberBetween() numberBetween adalah id_jobs minimal dan id_jobs maksimal yang ada pada tabel jobs
//  kolom 'name' => faker->name
//  kolom 'email' => faker->email UNIQUE
//  kolom 'phone' => faker->phoneNumber
//  kolom 'address' => faker->address
$factory->define(Employees::class, function (Faker $faker) {
    return [
        'id_jobs' => faker->numberBetween(1,150),
       'name' => $faker->name,
       'email' => $faker->unique()->email,
       'phone' => $faker->phoneNumber,
       'address' => $faker->address,
    ];
});

// documentation https://github.com/fzaninotto/Faker