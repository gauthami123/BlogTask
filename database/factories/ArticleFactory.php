<?php

use Faker\Generator as Faker;
use App\Models\Article;
use App\Models\Author;

    //$authors = App\Author::pluck('id')->toArray();



$factory->define(Article::class, function (Faker $faker) {
        return [
            'author_id' => function() {
                return factory(Author::class)->create()->id;
            },
            'title' => $faker->word,
            'content'  => $faker->paragraph,
            'image' => 'image1.png'

        ];
    });

?>


