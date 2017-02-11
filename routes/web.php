<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => ['web']] , function(){
		
		Route::get('/', 'PagesController@getIndex');

		Route::resource('posts' , 'PostController');

		Route::get('blog/{slug}' , ['uses' => 'BlogController@getSingle' , 'as' => 'blog.single'])->where('slug' , '[\w\d/-\_]+');

		Route::post('comment/{post_id}' , [ 'uses' => 'CommentsController@store' , 'as' => 'comments.store' ]);
});

