<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNotesTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notes_tags', function(Blueprint $table)
		{
			$table->foreign('note_id', 'fk_notes_tags_notes1')->references('id')->on('notes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tag_id', 'fk_notes_tags_tags1')->references('id')->on('tags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('notes_tags', function(Blueprint $table)
		{
			$table->dropForeign('fk_notes_tags_notes1');
			$table->dropForeign('fk_notes_tags_tags1');
		});
	}

}
