<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoungesTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lounges_tags', function(Blueprint $table)
		{
			$table->integer('lounge_id');
			$table->integer('tag_id')->index('fk_lounges_tags_tags1_idx');
			$table->primary(['lounge_id','tag_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lounges_tags');
	}

}
