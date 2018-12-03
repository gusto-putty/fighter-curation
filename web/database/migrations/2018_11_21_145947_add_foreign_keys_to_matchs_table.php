<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMatchsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('matchs', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_matchs_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('matchs', function(Blueprint $table)
		{
			$table->dropForeign('fk_matchs_users1');
		});
	}

}
