<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notes', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('user_id')->index('fk_notes_users1_idx');
			$table->text('article', 65535)->nullable();
			$table->boolean('is_published')->default(0);
			$table->dateTime('created_at');
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
		Schema::drop('notes');
	}

}
