<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoungesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lounges', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('name', 45);
			$table->string('icon', 100)->nullable();
			$table->string('description', 100)->nullable();
			$table->boolean('is_published')->default(0);
			$table->dateTime('created_at');
			$table->dateTime('update_at');
			$table->dateTime('delete_at')->nullable();
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
		Schema::drop('lounges');
	}

}
