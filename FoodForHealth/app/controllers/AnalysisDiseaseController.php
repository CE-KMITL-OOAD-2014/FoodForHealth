<?php

class AnalysisDiseaseController extends BaseController {


	public function analysisDisease(){
		$data = new AnalysisDisease();
		$containers=$data->analysisDisease();
		return View::make('Info')->with('disease',$containers);
		
	}
}