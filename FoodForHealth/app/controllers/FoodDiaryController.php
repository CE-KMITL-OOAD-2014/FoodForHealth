<?php

class FoodDiaryController extends BaseController
{
	public function showFirst()
	{
		//return View::make('first');
		return View::make('Food');
	}
}