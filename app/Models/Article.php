<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TagLink;
use App\Models\Author;
use App\Models\Comment;

class Article extends Model {
    protected $table='articles';

    public function taglink(){
        return $this->hasMany(TagLink::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function searchArticleByName()
    {
        
    }
}