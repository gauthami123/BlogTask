<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\TagLink;


class Tags extends Model
{
     protected $table='tags';

      public function taglink(){
        return $this->hasMany(TagLink::class);
    }
}
