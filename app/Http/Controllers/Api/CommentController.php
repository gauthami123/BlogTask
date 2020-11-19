<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;



class CommentController extends Controller {

    //--***************** Add comments*********************--//
    public function addComment(Request $request){
    	$comment = new Comment;
        $comment->comment = $request->comment;
        $comment->author_id = $request->author_id;
        $comment->article_id = $request->article_id;
        $comment->save();
        return 'Your comment added successfully';
    
    }

        //--***************** Update comments*********************--//
     public function updateComment(Request $request,$id){
    	 $comment = Comment::find($id);
         $comment->comment = is_null($request->comment) ? $comment->comment : $request->comment;
         $comment->author_id = is_null($request->author_id) ? $comment->author_id : $request->author_id;
         $comment->article_id = is_null($request->article_id) ? $comment->article_id : $request->article_id;
         $comment->save();
         return 'Your comment  has been updated';
    
    }


}
