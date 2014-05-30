<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotGuestlistUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guestlist_user', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('guestlist_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('guestlist_id')->references('id')->on('guestlists')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guestlist_user');
	}

}
