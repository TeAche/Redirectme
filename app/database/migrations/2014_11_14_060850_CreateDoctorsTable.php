<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends BaseMigration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create table 'doctor'
        Schema::create('doctor', function(Blueprint $table)
        {
                $this
                    ->setTable($table)
                    ->addPrimary()
                    ->addString("firstname")
                    ->addString("lastname")
                    ->addString("middlename")
                    ->addString("nickname")
                    ->addForeign("speciality_id")
                    ->addForeign("object_id")
                    ->addString("activity")
                    ->addString("loyality")
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
		//Delete table 'doctor'
        Schema::dropIfExists('doctor');
	}

}
