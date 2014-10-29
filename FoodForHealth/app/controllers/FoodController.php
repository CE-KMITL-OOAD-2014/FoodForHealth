<?php

class FoodController extends BaseController
{
	public function showFirst()
	{
		//return View::make('first');
		return View::make('CreateFood');
	}

	public function postprofile()
	{
		$data = new Food();
		$data->name =Input::get('name'); 
		$data->calories =Input::get('calories');
		$data->save();
		return Redirect::to('signup');
	}
}