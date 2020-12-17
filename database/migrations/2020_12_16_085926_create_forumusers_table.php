<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForumusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forumusers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('pseudo', 10)->unique('pseudo_UNIQUE');
			$table->integer('role_id')->index('fk_users_roles1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forumusers');
	}

}
