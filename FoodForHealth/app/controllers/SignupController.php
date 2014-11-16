<?php

class SignupController extends BaseController
{
	public function show()
	{
		//return View::make('first');
		return View::make('Signup');
	}
	public function signup()
	{		
		$user = new User();
		$user->signup(Input::get('username'),Input::get('password'),Input::get('name'),Input::get('age'),
			Input::get('height'),Input::get('weight'),Input::get('gender'),Input::get('email'));
		return Redirect::to('signin');
	}
}