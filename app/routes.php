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
// Route::get('/', function(){
// 	return "we are home";
// });

// Route::get('/sayHello{name}', function($name)
// {
// 	if ($name == "Andrew")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Andrew")
    {
        return Redirect::to('/');
    }
    else
    {
        return View::make('temp.my-first-view')->with('name', $name);
    }
});


Route::get('/resume', function()
{
    return "This is my resume";
});


Route::get('/portfolio', function()
{
    return "This is my portfolio";
});


Route::get('/rolldice', function()
{
    return View::make('temp.roll-dice');
});


Route::get('/rolldice/{guess}', function($guess) {

$random = rand(1,6);

$data = array(
	'random' => $random,
	'guess'  => $guess
	);
	
	return View::make('temp.roll-dice')->with($data);
	
});