<?php

use Faker\Generator as Faker;

$factory->define(App\post::class, function (Faker $faker) {
    return [
        'judul' =>$faker->sentence(10),
        'slug_judul' =>str_slug($faker->sentence(10)),
        'image' =>$faker->paragraph(1),
        'isi' =>$faker->paragraph(100)
    ];
});
