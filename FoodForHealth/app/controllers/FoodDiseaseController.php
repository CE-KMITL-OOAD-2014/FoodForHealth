<?php

class FoodDiseaseController extends BaseController
{
	public function show()
	{
		//return View::make('first');
		return View::make('FoodDisease');
	}


	public function saveFoodDisease(){
		$food =  Food::find(Input::get('food_id'));
		$disease =  Disease::find(Input::get('disease_id'));

		$food->diseases()->save($disease);
	
		return Redirect::to('fooddisease');
	}
}