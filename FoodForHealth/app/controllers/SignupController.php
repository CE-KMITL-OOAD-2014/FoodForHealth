<?php

class SignupController extends BaseController
{
	public function showFirst()
	{
		//return View::make('first');
		return View::make('Signup');
	}
	public function postprofile()
	{
		/*$data = new User();
		$data->username =Input::get('username');
			$data->password =Hash::make(Input::get('password'));	
			$data->name =Input::get('name'); 
			$data->age =Input::get('age');
			$toFloat = (float)Input::get('weight');
			$data->weight =$toFloat;
			$toFloat2 = (float)Input::get('height');
			$data->height =$toFloat2;
			$data->gender =Input::get('gender');
			$data->email =Input::get('email');
		// Build the validation constraint set.
		$rules = array(
			'username' => 'required|alpha_num|min:3|max:32',
			'email' => 'required|email',
			'password' => 'required|confirm|min:4',
			'name' => 'required',
			'age'=> 'required',
			'weight' => 'required',
			'height' => 'required',
			'gender' => 'required'
			);

 // Create a new validator instance.
		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
 // Normally we would do something with the data.
		/*	$data->username =Input::get('username');
			$data->password =Hash::make(Input::get('password'));	
			$data->name =Input::get('name'); 
			$data->age =Input::get('age');
			$toFloat = (float)Input::get('weight');
			$data->weight =$toFloat;
			$toFloat2 = (float)Input::get('height');
			$data->height =$toFloat2;
			$data->gender =Input::get('gender');
			$data->email =Input::get('email');*/
		/*	$data->save();
			return Redirect::to('signup');
 //return 'Data was saved.';
		}
		else{
			return Redirect::to('signin');
		}*/

 		//return Redirect::to('/')->withErrors($validator);
		$data = new User();
		$data->username =Input::get('username');
		$data->password =Hash::make(Input::get('password'));	
		$data->name =Input::get('name'); 
		$data->age =Input::get('age');
		$toFloat = (float)Input::get('weight');
		$data->weight =$toFloat;
		$toFloat2 = (float)Input::get('height');
		$data->height =$toFloat2;
		$data->gender =Input::get('gender');
		$data->email =Input::get('email');
		$data->save();
		return Redirect::to('signin');
	}
}