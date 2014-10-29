<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodDisease extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('food_disease', function(Blueprint $table)

		{
			$table->integer('food_id')->unsigned();
			$table->foreign('food_id')->references('id')->on('foods');
			$table->integer('disease_id')->unsigned();
			$table->foreign('disease_id')->references('id')->on('diseases');
			$table->increments('id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('food_disease');
	}

}

