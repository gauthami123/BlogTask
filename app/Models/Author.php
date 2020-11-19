<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Comment;

class Author extends Model
{
	 protected $table='authors';

	  public function article(){
        return $this->hasMany(Article::class);
    }

      public function comment(){
        return $this->hasMany(Comment::class);
    }
  

}
