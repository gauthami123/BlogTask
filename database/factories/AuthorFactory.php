<?php

use Faker\Generator as Faker;
use App\Models\Author;

$factory->define(Author::class, function (Faker $faker) {
    return [
        //
        "author_name"=>$faker->name(),

    ];
});
