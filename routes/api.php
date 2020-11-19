<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// /**********************************   Author Route Starts Here   *******************************************/

 Route::get('authors','Api\AuthorController@index');
 Route::get('author/{id}/show','Api\AuthorController@show');
 Route::put('updateAuthor/{id}','Api\AuthorController@updateAuthor');

// /**********************************   Article Route Starts Here   *******************************************/

 Route::get('articles','Api\ArticleController@index');
 Route::get('article/{id}/show','Api\ArticleController@show');
 Route::get('searchArticleByName/{text}','Api\ArticleController@searchArticleByName');
 Route::put('updateArticle/{id}','Api\ArticleController@updateArticle');

// /**********************************   Comment Route   *******************************************/

 Route::post('addComment','Api\CommentController@addComment');
 Route::put('updateComment/{id}','Api\CommentController@updateComment');
 

// /********************************************Tags Route ************************************************/
 Route::get('tags','Api\TagsController@index');
 Route::get('tags/article/{id}/show','Api\TagsController@show');
 //***********************************************************************************************************/