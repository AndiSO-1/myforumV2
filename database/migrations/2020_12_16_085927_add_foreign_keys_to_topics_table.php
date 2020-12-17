<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('topics', function(Blueprint $table)
		{
			$table->foreign('state_id', 'fk_topics_states1')->references('id')->on('states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('theme_id', 'fk_topics_themes')->references('id')->on('themes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('forumuser_id', 'fk_topics_users1')->references('id')->on('forumusers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('topics', function(Blueprint $table)
		{
			$table->dropForeign('fk_topics_states1');
			$table->dropForeign('fk_topics_themes');
			$table->dropForeign('fk_topics_users1');
		});
	}

}
