<?php

class FoodDisease extends Eloquent {
	protected $table ="food_disease";

	
	//this method use to save relation of food and disease
	public function saveFoodDisease(){
		$food =  Food::find(Input::get('food_id'));
		$disease =  Disease::find(Input::get('disease_id'));
		$food->diseases()->save($food);
		$food->save();
	}
}
