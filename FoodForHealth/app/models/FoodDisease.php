<?php

class FoodDisease extends Eloquent {
	protected $table ="food_disease";

	public function postprofile()
	{
		$data = new FoodDisease();
		$data->food_id =Input::get('food_id'); 
		$data->disease_id =Input::get('disease_id');
		$data->save();
		return Redirect::to('fooddisease');
	}
	public function saveFoodDisease(){
		$food =  Food::find(Input::get('food_id'));
		$disease =  Disease::find(Input::get('disease_id'));
		$food->diseases()->save($food);
		$food->save();
	}
}
