<?php

class HistoryController extends BaseController
{
	public function show()
	{
		return View::make('CreateFood');
	}

	public function showHistory(){
	
		$histories = new History();
		$histories->showHistory();
		return View::make('Food')->with('histories',$histories->showHistory());
	}
	public function showForEditHistory(){
	
		$histories = new History();
		$histories->showHistory();
		return View::make('showHistoryForEdit')->with('histories',$histories->showHistory());
	}
	public function deleteHistory($id){
	
		$histories = new History();
		$histories->deleteHistory($id);
		return Redirect::to('showfood');
	}
	public function addFoodInHistory($id)
	{
		$data = new History();
		$data->addFood($id);
		return Redirect::to('showfood');
	}
	
}