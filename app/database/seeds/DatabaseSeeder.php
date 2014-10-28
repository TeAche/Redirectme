<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        $this->call('CheckSeeder');
        $this->call('UserSeeder');
        $this->call('ResourceSeeder');
		// $this->call('UserTableSeeder');
	}

}
