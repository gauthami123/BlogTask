<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller {

    //--***************** show all the Authors-***************** //
    public function index()
    {
         $authors= Author::all();
         return response()->json([ 'Authorslist' => $authors ]);
    
    }

    //--***************** show specific author By id*****************//
    public function show($id)
    {
        $author = Author::find($id);
        return  response()->json([ 'Author' => $author ]);
    }

    //--***************** update author by id***************** //
   public function updateAuthor(Request $request,$id){
          $Author = Author::find($id);
         $Author->author_name = is_null($request->author_name) ? $Author->author_name : $request->author_name;
         $Author->save();
         return 'Author updated';
    
    }

}
