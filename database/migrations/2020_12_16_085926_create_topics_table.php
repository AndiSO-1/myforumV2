<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description', 5000);
			$table->integer('theme_id')->index('fk_topics_themes_idx');
			$table->integer('state_id')->index('fk_topics_states1_idx');
			$table->integer('forumuser_id')->index('fk_topics_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics');
	}

}
