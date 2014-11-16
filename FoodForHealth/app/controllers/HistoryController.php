<?php

class HistoryController extends BaseController
{
	public function show()
	{
		return View::make('CreateFood');
	}
	//This method show what user's eat in Day in page 'Food'
	public function showHistory(){
	
		$histories = new History();
		$histories->showHistory();
		return View::make('Food')->with('histories',$histories->showHistory());
	}
	//This method show Food History that user eat in Day in page 'showHistoryForEdit' 
	public function showForEditHistory(){
	
		$histories = new History();
		$histories->showHistory();
		return View::make('showHistoryForEdit')->with('histories',$histories->showHistory());
	}
	//This method use to delete history that keep history of eating of user that delete by id
	public function deleteHistory($id){
	
		$histories = new History();
		$histories->deleteHistory($id);
		return Redirect::to('showfood');
	}
	//This method use to add history what user eat in day
	public function addFoodInHistory($id)
	{
		$data = new History();
		$data->addFood($id);
		return Redirect::to('showfood');
	}
	
}