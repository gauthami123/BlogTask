<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tags;



class TagsController extends Controller
{
    //--*****************show all the tags*****************//
    public function index(){
        $Tags = Tags::all();
        return response()->json([ 'Tagslist' => $Tags ]);
    }

   
}
