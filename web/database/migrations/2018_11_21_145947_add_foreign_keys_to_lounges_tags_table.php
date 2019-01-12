<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoungesTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lounges_tags', function(Blueprint $table)
		{
			$table->foreign('lounge_id', 'fk_lounges_tags_lounges1')->references('id')->on('lounges')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tag_id', 'fk_lounges_tags_tags1')->references('id')->on('tags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lounges_tags', function(Blueprint $table)
		{
			$table->dropForeign('fk_lounges_tags_lounges1');
			$table->dropForeign('fk_lounges_tags_tags1');
		});
	}

}
