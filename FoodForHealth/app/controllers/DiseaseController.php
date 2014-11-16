<?php

class DiseaseController extends BaseController
{
	public function show()
	{
		return View::make('CreateDisease');
	}

	public function savediease()
	{
		$data = new Disease();
		$data->savediease(Input::get('name'));
		return Redirect::to('createdisease');
	}
}