<?php

use Illuminate\Database\Seeder;

class acountadmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	 [
        	 	'email' => 'haoti27@gmail.com',
        	 	'password' => bcrypt('123456'),
        	 	'level' => 1,
        	 ],
        ]);
    }
}
