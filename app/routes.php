<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login',  'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('/resume_portfolio', function()
{
    return View::make('resume_portfolio');
});

Route::get('/', function(){
	return "we are home";
});


Route::get('/', 'HomeController@show');

Route::resource('posts', 'PostsController');



Route::get('/orm-test', function() {

	$post = Post::find(1);

	$post->delete();

	return "Eloquent ORM is Eloquent";

});


