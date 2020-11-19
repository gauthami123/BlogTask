<?php

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Author::class, 10)->create()->each(function($user) 
    	{
           factory(Article::class, 10)->create(['author_id' => $user->id
                    ]);
            });    


     
      }
    }