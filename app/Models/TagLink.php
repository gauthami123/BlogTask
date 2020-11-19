<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tags;
use App\Models\Article;

class TagLink extends Model
{
	 protected $table='tag_links';

	  public function tags(){
        return $this->belongsTo(Tags::class);
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }
    //
}
