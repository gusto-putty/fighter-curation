<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notes_tags', function(Blueprint $table)
		{
			$table->integer('note_id')->unsigned()->index('fk_notes_tags_notes1_idx');
			$table->integer('tag_id')->unsigned()->index('fk_notes_tags_tags1_idx');
			$table->primary(['note_id','tag_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notes_tags');
	}

}
