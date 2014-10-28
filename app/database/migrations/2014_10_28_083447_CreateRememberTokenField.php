<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRememberTokenField extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table("users", function(Blueprint $table)
            {
                //create field RememberToken
                $table->rememberToken("remember_token")->nullable()->default(null);
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Delete field RememberToken
        Schema::table("users", function(Blueprint $table)
            {
                $table->dropColumn(array("remember_token"));
            }
        );
    }

}
