<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOpinionstatetransitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('opinionstatetransitions', function(Blueprint $table)
		{
			$table->foreign('from_id', 'fk_opinionstatetransitions_opinionstates1')->references('id')->on('opinionstates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('to_id', 'fk_opinionstatetransitions_opinionstates2')->references('id')->on('opinionstates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('opinionstatetransitions', function(Blueprint $table)
		{
			$table->dropForeign('fk_opinionstatetransitions_opinionstates1');
			$table->dropForeign('fk_opinionstatetransitions_opinionstates2');
		});
	}

}
