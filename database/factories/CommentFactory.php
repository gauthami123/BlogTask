<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
     $articleIds = DB::table('articles')->pluck('id');
        $authorIds= DB::table('authors')->pluck('id');
    return [
      "article_id"=>$faker->randomElement($articleIds),
      "author_id"=>$faker->randomElement($authorIds),
      "comment"=>$faker->text()
    ];
});
