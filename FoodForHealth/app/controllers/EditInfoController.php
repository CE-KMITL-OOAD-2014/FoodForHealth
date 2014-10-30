<?php

class EditInfoController extends BaseController {

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

	public function show()
	{
		return View::make('EditInfo');
	}
	public function edit(){
		$id = Input::get('id');
		$data = User::find($id);
		//$data->username =Input::get('username');
		//$data->password =Input::get('password');
		$data->name =Input::get('name'); 
		$data->age =Input::get('age');
		$toFloat = (float)Input::get('weight');
		$data->weight =$toFloat;
		$toFloat2 = (float)Input::get('height');
		$data->height =$toFloat2;
		$data->gender =Input::get('gender');
		$data->email =Input::get('email');
		$data->save();
		return Redirect::to('info');

	}
}
