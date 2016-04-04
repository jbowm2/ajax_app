<?php

use App\Post;
use App\Http\Requests;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function(){
	return view('posts.index');
});

Route::resource('posts', 'PostsController');
Route::get('/', 'PostsController@home');
Route::get('ajax', 'PostsController@ajax');
Route::get('create', 'PostsController@create');
Route::get('display',['uses' => 'PostsController@display', 'as' => 'display']);

Route::post('store', 'PostsController@store');

Route::get('search', 'PostsController@search');

Route::get('typeahead','PostsController@typeahead');
Route::get('/ajax/search/{term}','PostsController@query');