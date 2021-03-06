<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}
	public function signup($username,$password,$name,$age,$height,$weight,$gender,$email)
	{

		$user = new User();
		$user->username =$username;
		$user->password =Hash::make($password);
		$user->name =$name ; 
		$user->age =$age ;
		$user->weight =$weight;
		$user->height =$height;
		$user->gender =$gender ;
		$user->email =$email ;
		if($user->gender=="Male")
		{
  			$user->caloriesForOneDay=370+(21.6*((0.32810 * $user->weight)+(0.33929 * $user->height)-29.5336) );
  		}
  		else{
  			$user->caloriesForOneDay=370+(21.6*((0.29569 * $user->weight)+(0.42813 * $user->height)-43.2933) );
  		}
		$user->save();

	}
	public function edit(){
		$id = Input::get('id');
		$user = User::find($id);
		$user->name =Input::get('name'); 
		$user->age =Input::get('age');
		$user->weight =Input::get('weight');
		$user->height =Input::get('height');
		$user->gender =Input::get('gender');
		$user->email =Input::get('email');
		$weightForCal=Input::get('weight');
		$heightForCal=Input::get('height');
		if($user->gender=="Male")
		{
  			$user->caloriesForOneDay=370+(21.6*((0.32810 * $user->weight)+(0.33929 * $user->height)-29.5336) );
  		}
  		else{
  			$user->caloriesForOneDay=370+(21.6*((0.29569 * $user->weight)+(0.42813 * $user->height)-43.2933) );
  		}
		$user->save();
		return Redirect::to('info');
	}

}
