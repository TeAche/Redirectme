<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends BaseMigration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Product Table
        Schema::create("product", function (Blueprint $table)
        {
            $this
                ->setTable($table)
                ->addPrimary()
                ->addString("title")
                ->addDecimal("price")
                ->addDecimal("bonus")
                ->addString("inn")
                ->addString("form_id")
                ->addString("dosage_id")
                ->addString("qts")
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
		//Drop table Product
        Schema::dropIfExists("product");
	}

}
