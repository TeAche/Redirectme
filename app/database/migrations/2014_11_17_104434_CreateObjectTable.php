<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectTable extends BaseMigration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create 'object' table
        Schema::create('object', function(Blueprint $table)
        {
            $this
                ->setTable($table)
                ->addPrimary()
                ->addString('title')
                ->addTimestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Drop table 'object' if exists
        Schema::dropIfExists('object');
	}

}
