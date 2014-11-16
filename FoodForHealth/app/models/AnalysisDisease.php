<?php

class AnalysisDisease extends Eloquent{
	
	public function analysisDisease(){

		$date= date("Y-m-d H:i:s");
		$timestart=substr($date, 0, 11).'00:00:00';
		$timeend=substr($date, 0, 11).'23:59:59';
		if(isset(Auth::User()->id)){
			$histories = History::where('id_user', '=', Auth::User()->id )->
			whereBetween('updated_at', array($timestart, $timeend))->get();	
			$disease = array();
			$temp = array();
			$map;
	
			for($i=0;$i<count($histories);$i++){
			
				$arr = Food::where('id', '=',$histories[$i]->id_food)->get();
				array_push($temp, $arr[0]);
		
			}

			
			for($y=0;$y<count($temp);$y++){
		
				$disease_name = array();
				$tmpDiseases = $temp[$y]->diseases()->get();
				for($i=0; $i<sizeof($tmpDiseases); $i++){
					array_push($disease_name,$tmpDiseases[$i]->name);
				}
				$map[$temp[$y]->id]=$disease_name;
			}
			if(!isset($map)){return View::make('Info');}
			$map=array_values($map);
			$keep = array();
			foreach($map as $container){
				foreach($container as $value){
					$value=$container;
					foreach ($value as $value2) {
						array_push($keep,$value2);
					}		
				}
			}
			
			$map=$keep;
			$containers = array ();

			$map=array_unique($keep);

			foreach ($map as $eiei) {
				array_push($containers, $eiei);
			}
			
			if(!isset($map)){
				return  NULL;//View::make('Info');
			}
			else{
				return $containers;//View::make('Info')->with('disease',$containers);
			}
		}
		return NULL;

	}
}