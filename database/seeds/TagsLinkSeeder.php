<?php

use Illuminate\Database\Seeder;

class TagsLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         factory(App\Models\TagLink::class, 300)->create();
      
    }
}
