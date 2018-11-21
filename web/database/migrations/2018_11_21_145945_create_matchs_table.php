<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatchsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matchs', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('user_id')->index('fk_matchs_users1_idx');
			$table->string('name', 45);
			$table->string('room_id', 45);
			$table->text('description', 65535)->nullable();
			$table->time('close_time');
			$table->dateTime('created_at');
			$table->dateTime('upated_at');
			$table->softDeletes();
			$table->integer('version')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matchs');
	}

}
