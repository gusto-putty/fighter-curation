<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersLoungesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_lounges', function(Blueprint $table)
		{
			$table->foreign('lounge_id', 'fk_users_lounges_lounges1')->references('id')->on('lounges')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_users_lounges_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_lounges', function(Blueprint $table)
		{
			$table->dropForeign('fk_users_lounges_lounges1');
			$table->dropForeign('fk_users_lounges_users1');
		});
	}

}
