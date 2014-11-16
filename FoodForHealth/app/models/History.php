<?php

class History extends Eloquent{
	protected $table="histories";

	public function addFood($id)
	{
		$data = new History();
		$data->id_user =Auth::User()->id; 
		$data->id_food = $id ;
		$data->save();
	}
	
	public function deleteHistory($id)
	{
		$data = History::find($id);
		$data->delete();
	}
	public function showHistory(){
		//$data = new History();
		$date= date("Y-m-d H:i:s");
		$timestart=substr($date, 0, 11).'00:00:00';
		$timeend=substr($date, 0, 11).'23:59:59';
		if(isset(Auth::User()->id)){
		return History::where('id_user', '=', Auth::User()->id )->
		whereBetween('updated_at', array($timestart, $timeend))->get();
		}
	}

	public function analysisDisease(){
		$date= date("Y-m-d H:i:s");
		$timestart=substr($date, 0, 11).'00:00:00';
		$timeend=substr($date, 0, 11).'23:59:59';
		$histories = History::where('id_user', '=', Auth::User()->id )->
		whereBetween('updated_at', array($timestart, $timeend))->get();
		$temp;
		$disease;
		for($i=0;$i<count($histories);$i++){
					$temp[$i] = Food::find($histories[$i]->id_food);//keep id_food to $temp
		}
		for($y=0;$y<count($temp);$y++){
		$disease[$y] = FoodDisease::where('food_id', '=', $temp[$j])->get();
		}
	}
}
