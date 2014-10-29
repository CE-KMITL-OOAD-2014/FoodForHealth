<?php

class FoodDiseaseController extends BaseController
{
	public function showFirst()
	{
		//return View::make('first');
		return View::make('FoodDisease');
	}

	public function postprofile()
	{
		$data = new FoodDisease();
		$data->food_id =Input::get('food_id'); 
		$data->disease_id =Input::get('disease_id');
		// var_dump($data);
		// exit();
		$data->save();
		return Redirect::to('fooddisease');
	}
}