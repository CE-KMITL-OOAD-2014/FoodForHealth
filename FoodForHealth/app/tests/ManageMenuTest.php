<?php
	class ManageMenuTest extends TestCase{
		public function testAddMenu()
		{
			$arryFoodName=arry();
			$arryFoodCalorie=arry();
			for($i=0;$i<10;$i++){
				$arryFoodName[$i]=Mockery::mock('Food');
				$arryFoodName[$i]->shouldReceive('getFoodName')->andReturn($foodName);
				$arryFoodCalorie[$i]=Mockery::mock('Food');
				$arryFoodCalorie[$i]->shouldReceive('getFoodCalorie')->andReturn($foodCalorie);
			}
			$menu=new Food($arrayFoodName,$arrayFoodCalorie);
			$foodMenu=$menu->addMenu($foodName,$foodCalorie);
			$testFoodName=$foodName;
			$testFoodCalorie=$foodCalorie;
			$this->assertEquals($foodMenu->foodName,$testFoodName);
			$this->assertEquals($foodMenu->foodCalorie,$testFoodCalorie);

			}
		}

?>