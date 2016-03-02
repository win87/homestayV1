<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index(); // conrespond to 'id' on 'users' table
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');	
			$table->string('title')->default('');
			$table->text('intro')->default('');	
			$table->string('adult_num');
			$table->string('child_num');
			$table->string('house_type');
			$table->string('room_type');		
			$table->string('country');
			$table->string('state');
			$table->string('city');
			$table->string('address1');
			$table->string('address2');
			$table->string('zip');
			$table->string('avail_from');
			$table->string('min_days');
			$table->string('m_price');
			$table->string('d_price');
			$table->string('amenities');					
			$table->integer('status')->default('1')->unsigned();
			$table->timestamps();
			//$table->rememberToken();	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rooms');
	}

}