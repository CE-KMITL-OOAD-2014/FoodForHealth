<?php

class SigninController extends BaseController
{
	public function showSignin()
	{

		return View::make('Signin');
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('signin');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'username'    => 'required', // make sure the user is an actual user
			'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
			);
		$msg = array(
			'username.required' => 'username ไม่สามารถเป็นค่าว่างได้',
			'password.required' => 'password ไม่สามารถเป็นค่าว่างได้',
			'username.min' => 'username ต้องไม่ต่ำกว่า :min ตัวอักษร',
			'password.min' => 'password ต้องไม่ต่ำกว่า :min ตัวอักษร',
			);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules,$msg);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			$messages = $validator->messages();
				//return Redirect::to('signup')->withErrors($messages)->withInput();
			return Redirect::to('signin')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
			} 
			else {

			// create our user data for the authentication
				$userdata = array(
					'username' 	=> Input::get('username'),
					'password' 	=> Input::get('password')
					);

			// attempt to do the login
				if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
					return Redirect::to('info');

				} 
				else {	 	

				// validation not successful, send back to form	
					return 'fail';
					//return Redirect::to('signin');

				}

			}
			/*$rules = array('username'    => 'required|min:3', // make sure the user is an actual user
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);
			$msg = array(
			'username.required' => 'username ไม่สามารถเป็นค่าว่างได้',
			'password.required' => 'password ไม่สามารถเป็นค่าว่างได้',
			'username.min' => 'username ต้องไม่ต่ำกว่า :min ตัวอักษร',
			'password.min' => 'password ต้องไม่ต่ำกว่า :min ตัวอักษร',
			);
			$validator = Validator::make(Input::all(), $rules,$msg);

			if ($validator->fails())
			{
				return Redirect::to('signin')->withErrors($msg);
			}'*/
		}
/*
		public function loginAction(){
			$msg = array(
				'username.required' => 'username ไม่สามารถเป็นค่าว่างได้',
				'password.required' => 'password ไม่สามารถเป็นค่าว่างได้',
				'username.min' => 'username ต้องไม่ต่ำกว่า :min ตัวอักษร',
				'password.min' => 'password ต้องไม่ต่ำกว่า :min ตัวอักษร',
				);
			$rules = array(
				'username' => 'required|min:4',
				'password' => 'required|min:4'
				);
			if (Input::server("REQUEST_METHOD") == "POST"){
				$validator = Validator::make(Input::all(),$rules,$msg);
				if($validator->fails()){
					$messages = $validator->messages();
					return Redirect::to('signin')->withErrors($messages)->withInput();
				}else{
					$username = Input::get('username');
					$password = Input::get('password');
					$users = User::where('username','=',$username)
					->where('password','=',$password)
					->count();
					if(empty($users)){
						$messages = array(
							array('พบไม่ข้อมูลผู้ใช้งาน..กรุณาตรวจสอบข้อมูลใหม่ด้วยครับ...')
							);
						return Redirect::to('signup')->withErrors($messages)->withInput();
					}else{
						$users = User::where('username','=',$username)
						->where('password','=',$password)
						->get();
						Session::put('user',$users);
						return Redirect::to('signup');
					}
				}
			} 
		}*/
	}

