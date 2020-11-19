<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller {
	
    //--*****************show all the article--*****************//
    public function index(){
        $articles = Article::all();
        return response()->json([ 'Articlelist' => $articles ]);
    }

    //--*****************show a Detailed Article by id--*****************//
    public function show($id)
    {           
        $article = Article::where('id', $id)
        			->orderBy('created_at', 'desc')
                        ->with("author")
                        ->with("taglink")
                         ->with("comment")
        			->get();
         return  response()->json([ 'Article' => $article ]);
        
    }

    //--*****************Search Article by text***************************//
    public function searchArticleByName($text)
    {              
        $result = Article::where('title','LIKE',"%{$text}%")
                        ->orWhere('content', 'LIKE',"%{$text}%")
                        ->orderBy('created_at', 'desc')
                        ->with("author")
                        ->with("taglink")
                        ->with("comment")
                        ->get();

           return $result;
    }

     //--*****************Update Article-*******************//
    public function updateArticle(Request $request,$id)
    {  
       $Article = Article::find($id);

       if($Article->author_id==$request->author_id)
       {
         	$Article->title = is_null($request->title) ? $Article->title : $request->title;
         	$Article->content = is_null($request->content) ? $Article->content : $request->content;
         	$Article->image = is_null($request->image) ? $Article->image : $request->image;
         	$Article->save();
         	return 'Article  has been updated';
     	}
     	else
     	{
     	 	return 'Article cannot be edited';
     	}
        
    }


}
