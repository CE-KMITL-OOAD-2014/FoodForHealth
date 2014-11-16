<?php

class History extends Eloquent{
	protected $table="histories";

	//this method use to keep  food and user to keep in database by id_user and id_food
	public function addFood($id)
	{
		$data = new History();
		$data->id_user =Auth::User()->id; 
		$data->id_food = $id ;
		$data->save();
	}
	
	//this method use to delete history that keep id_food and id_user
	public function deleteHistory($id)
	{
		$data = History::find($id);
		$data->delete();
	}
	//this method use to show what user/s eat in a day
	public function showHistory(){
		//$data = new History();
		$date= date("Y-m-d H:i:s");//current date and time
		$timestart=substr($date, 0, 11).'00:00:00';
		$timeend=substr($date, 0, 11).'23:59:59';
		if(isset(Auth::User()->id)){
		return History::where('id_user', '=', Auth::User()->id )->
		whereBetween('updated_at', array($timestart, $timeend))->get();
		}
	}

	
}
