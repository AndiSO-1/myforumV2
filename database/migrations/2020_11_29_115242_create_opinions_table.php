<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpinionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opinions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description', 5000);
			$table->integer('topic_id')->index('fk_opinions_topics1_idx');
			$table->integer('user_id')->index('fk_opinions_users1_idx');
			$table->integer('opinionstate_id')->index('fk_opinions_opinionstates1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('opinions');
	}

}
