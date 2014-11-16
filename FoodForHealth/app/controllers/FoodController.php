<?php

class FoodController extends BaseController
{
	public function show()
	{
		return View::make('CreateFood');
	}

	public function savefood()
	{
		$data = new Food();
		$data->savefood();
		return Redirect::to('showfood');
	}

	public function deleteFood($id)
	{
		$data = new Food();
		$data->deleteFood($id);
		return Redirect::to('showfood');
	}

	public function post_search(){
		$keyword = Input::get('keyword');

		if(empty($keyword)){
			return Redirect::to('showfood');
		}
		return View::make('results')->with('result',Food::search($keyword));
	}
	

	public function search(){
		return View::make('showSearch');
	}

	public function showDeleteSearch(){
		$keyword = Input::get('keyword');

		if(empty($keyword)){
			return Redirect::to('searchfood');
		}
		return View::make('showSearchFoodToDelete')->with('result',Food::search($keyword));

	}
}
