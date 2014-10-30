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

Route::get('/', function()
{
	return View::make('hello');
});
/*Route::get('testt', function()
{
	return View::make('simple');
});
Route::get('me', function()
{
	return "I'm Batman.";
});

Route::get('register' , function() {
	return View::make('register');
});
Route::get('eiei' , function() {
	return "eiei";
});
Route::get('eiei/{genre}' , function($genre) {
	return "eiei is {$genre}";
});

Route::get('/', function()
{
	return '<!doctype html>
	<html lang="en>
	<head>
		<meta charset="UTF-8"
		<title>Alright</title>
		</head>
		<body>
		<p>This is the perfect response!</p>
		</body>
		</html>' */
//	;
//});
//Route::get('/{squirrel}' , function($squirrel) {
//	$data['squirrel'] = $squirrel;
//	return View::make('simple', $data);

//});
Route::get('signup','SignupController@showFirst');
Route::post('signup','SignupController@postprofile');
Route::get('createfood','FoodController@showFirst');
Route::post('createfood','FoodController@postprofile');
Route::get('createdisease','DiseaseController@showFirst');
Route::post('createdisease','DiseaseController@postprofile');
Route::get('fooddisease','FoodDiseaseController@showFirst');
Route::post('fooddisease','FoodDiseaseController@postprofile');
Route::get('signin','SigninController@showSignin');
Route::post('signin','SigninController@doLogin');

Route::get('/','HomepageController@homepage');
//Route::post('/','HomepageController@test');
Route::get('info','InfoController@info');
Route::get('editprofile','EditInfoController@show');
Route::post('editprofile','EditInfoController@edit');
Route::get('logout', 'SigninController@doLogout');

Route::get('food','FoodDiaryController@showFirst');
Route::post('food','FoodDiaryController@search');




//Route::get('login',function()
//	return View::make('login');
//	);