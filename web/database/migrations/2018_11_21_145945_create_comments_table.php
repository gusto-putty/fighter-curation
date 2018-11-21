<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('user_id')->index('fk_comments_users1_idx');
			$table->integer('note_id')->index('fk_comments_notes1_idx');
			$table->text('comment', 65535);
			$table->dateTime('create_at');
			$table->dateTime('update_at');
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
		Schema::drop('comments');
	}

}
