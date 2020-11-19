<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tags::class, function (Faker $faker) {

   return [
   
   "name"=>$faker->unique()->randomElement($array = array ('Tutorial','Fitness','Beauty','News','Sports','Books'))



    		];
    		
  
});
