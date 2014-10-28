<?php
class UserSeeder extends DatabaseSeeder {
    public function run()
    {
        $users=array(
            array(
                'username'  => 'timur.khusainov',
                'password'  => Hash::make('secret'),
                'email'     => 'timur.husainov@gmail.com'
            )
        );

        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}