<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TagLink::class, function (Faker $faker) {
    $articleIds = DB::table('articles')->pluck('id');
        $tagIds= DB::table('tags')->pluck('id');
    return [
      "article_id"=>$faker->randomElement($articleIds),
      "tag_id"=>$faker->randomElement($tagIds)
    ];
});
