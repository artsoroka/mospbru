<?php 

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'login' => 'admin',
        	'password' => Hash::make('admin'),
        	'username' => 'Системный администратор'
        	));
    
    }

}