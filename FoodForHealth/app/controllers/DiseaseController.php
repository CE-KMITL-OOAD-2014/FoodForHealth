<?php

class DiseaseController extends BaseController
{
	public function showFirst()
	{
		//return View::make('first');
		return View::make('CreateDisease');
	}

	public function postprofile()
	{
		$data = new Disease();
		$data->name =Input::get('name'); 
		$data->save();
		return Redirect::to('signup');
	}
}