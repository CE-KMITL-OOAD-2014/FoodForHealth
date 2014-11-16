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
	public function deleteFood($id)
	{
		$data = Food::find($id);
		$data->delete();
	}
}