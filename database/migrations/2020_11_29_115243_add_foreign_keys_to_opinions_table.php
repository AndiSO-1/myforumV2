<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOpinionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('opinions', function(Blueprint $table)
		{
			$table->foreign('opinionstate_id', 'fk_opinions_opinionstates1')->references('id')->on('opinionstates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('topic_id', 'fk_opinions_topics1')->references('id')->on('topics')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_opinions_users1')->references('id')->on('forumusers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('opinions', function(Blueprint $table)
		{
			$table->dropForeign('fk_opinions_opinionstates1');
			$table->dropForeign('fk_opinions_topics1');
			$table->dropForeign('fk_opinions_users1');
		});
	}

}
