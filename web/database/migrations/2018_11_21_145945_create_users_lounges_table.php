<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersLoungesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_lounges', function(Blueprint $table)
		{
			$table->integer('user_id')->index('fk_users_lounges_users1_idx');
			$table->integer('lounge_id')->index('fk_users_lounges_lounges1_idx');
			$table->boolean('is_admin');
			$table->boolean('is_assign')->default(0);
			$table->dateTime('created_at');
			$table->dateTime('update_at');
			$table->softDeletes();
			$table->integer('version')->default(0);
			$table->primary(['user_id','lounge_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_lounges');
	}

}
