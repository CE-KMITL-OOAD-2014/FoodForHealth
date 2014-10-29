<?php
	class CalculateCalorieTest extends TestCase{
		public function testSumCalorie()
		{
			$foodCalorie=Mockery::mock('Food');
			$foodCalorie->shouldReceive('getFoodCalorie')->andReturn($foodCalorie);
			$calorie=new Food($foodCalorie);
			$forFunction=$calorie->sumCalorie();
			for ($i=0;$i<sizeof($foodCalorie);$i++)
			{
				$foodCalorie[i]+=$foodCalorie[i+1];
			}
			$forTest=$foodCalorie[sizeof($foodCalorie)];
			$this->assertEquals($forFunction,$forTest);
		}
?>