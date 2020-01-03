<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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



$factory->define(App\Etudiant::class, function (Faker $faker) {
    return [
        'nom' => $faker->familyname,
        'prenom' => $faker->name,
        'annee'=> $faker->year,
        'grp'=> $faker->grp,
        'mat'=> $faker->matricule,
        'moy'=> $faker->moyenne,
        'password'=> $faker->pwd,
        'email'=> $faker->adr
    ];
});