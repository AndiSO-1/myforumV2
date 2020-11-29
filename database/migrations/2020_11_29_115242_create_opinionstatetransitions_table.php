<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpinionstatetransitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opinionstatetransitions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('from_id')->index('fk_opinionstatetransitions_opinionstates1_idx');
			$table->integer('to_id')->index('fk_opinionstatetransitions_opinionstates2_idx');
			$table->unique(['from_id','to_id'], 'Uniquetrans');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('opinionstatetransitions');
	}

}
