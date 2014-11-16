<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('histories', function(Blueprint $table){
	    $table->increments('id');
	    $table->timestamps();
	    $table->integer('id_user')->unsigned();
	    $table->integer('id_food')->unsigned();
	    $table->foreign('id_food')->references('id')->on('foods');
	    $table->foreign('id_user')->references('id')->on('users');
	    $table->float('caloriesEatInOneDay')->unsigned()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('histories');
	}

}