<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\C_tipo_usuario;
use Faker\Generator as Faker;

$factory->define(C_tipo_usuario::class, function (Faker $faker) {

    return [
        'valor' => $faker->word,
        'descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
