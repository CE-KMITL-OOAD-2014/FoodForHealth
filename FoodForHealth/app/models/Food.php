<?php

class Food extends Eloquent{
	protected $table ="foods";
	
	public function diseases()
	{
		return $this->belongsToMany('Disease');
	}

	public static function search($keyword){
		return static::where('name','LIKE','%'.$keyword.'%')->get() ;
	}
	//this method use to save food in database
	public function savefood()
	{
		$data = new Food();
		$data->name =Input::get('name'); 
		$data->calories =Input::get('calories');
		$data->save();
	}
	public function getID(){
		return $this->id;
	}
	//this method use to delete food
	public function deleteFood($id)
	{
		$data = Food::find($id);
		$data->delete();
	}
}