<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	//This method use for show User'sinformation 
	public function showInfoForEdit()
	{
		return View::make('EditInfo');
	}
	
	//This method use to edit User's information
	public function edit(){
		$id = Input::get('id');
		$data = User::find($id);
		$data->edit();
		return Redirect::to('info');
	}
	//This method use to show page of User's information
	public function info()
	{
		return View::make('Info');
	}
}