<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(ArticleSeeder::class);
         $this->call(AuthorSeeder::class);
         $this->call(TagsSeeder::class);
           $this->call(TagsLinkSeeder::class);
           $this->call(CommentSeeder::class);
    }
}
