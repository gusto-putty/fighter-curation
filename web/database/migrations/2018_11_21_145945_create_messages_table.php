<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('lounge_id')->index('fk_messages_lounges1_idx');
			$table->integer('user_id')->index('fk_messages_users1_idx');
			$table->text('message', 65535)->nullable();
			$table->string('capture', 100)->nullable();
			$table->timestamps();
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
		Schema::drop('messages');
	}

}
