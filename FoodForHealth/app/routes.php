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
Route::get('signup','SignupController@show');
Route::post('signup','SignupController@signup');

Route::get('createfood','FoodController@show');
Route::post('createfood','FoodController@savefood');

Route::get('createdisease','DiseaseController@show');
Route::post('createdisease','DiseaseController@savediease');

Route::get('fooddisease','FoodDiseaseController@show');
Route::post('fooddisease','FoodDiseaseController@saveFoodDisease');

Route::get('signin','SigninController@showSignin');
Route::post('signin','SigninController@doLogin');

Route::get('/','HomepageController@home');
//Route::post('/','HomepageController@test');
Route::get('info','AnalysisDiseaseController@analysisDisease');//-------------------------------------------------
Route::get('editprofile','UserController@showInfoForEdit');

Route::post('editprofile','UserController@edit');
Route::get('logout', 'SigninController@doLogout');

//Route::get('food','FoodController@show');
//Route::post('food','FoodController@search');

Route::get('home','HomepageController@home');
//Route::post('home','HomepageController@homepage');

Route::get('homee' , function() {
	return View::make('Home');
});

Route::post('results','FoodController@post_search');
Route::get('food/{id}','HistoryController@addFoodInHistory');
Route::get('showfood','HistoryController@showHistory');
Route::post('searchfood','FoodController@showDeleteSearch');
Route::get('searchfood','FoodController@search');
Route::get('delete/{id}','FoodController@deleteFood');
Route::get('showhistorytoedit','HistoryController@showForEditHistory');
Route::get('deletehistory/{id}','HistoryController@deleteHistory');
//Route::get('infoo','FoodDiaryController@analysisDisease');
//Route::get('login',function()
//	return View::make('login');
//	);