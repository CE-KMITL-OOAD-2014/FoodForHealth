<?php

class Disease extends Eloquent{
	protected $table ="diseases";

	public function foods()
	{ 
		return $this->belongsToMany('Food');
	}

	public function savediease($name)
	{
		$data = new Disease();
		$data->name = $name; 
		$data->save();
	}
}