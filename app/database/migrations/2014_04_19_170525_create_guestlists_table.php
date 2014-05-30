<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuestlistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guestlists', function(Blueprint $table) {
			$table->increments('id');
			$table->string('event_name');
			$table->string('event_city');
			$table->string('event_location');
			$table->string('event_date');
			$table->string('event_status');
			$table->text('event_description');
			$table->string('event_start_time');
			$table->string('event_end_time');
			$table->integer('guestlist_max');
			$table->integer('event_price');
			$table->integer('host_id')->unsigned();
			$table->foreign('host_id')->references('id')->on('users');
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
		Schema::drop('guestlists');
	}

}
