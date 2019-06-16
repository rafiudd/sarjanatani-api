<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
	 			'name' => 'Admin sarjanatani',
	 			'email' => 'admin@sarjanatani.com',
	 			'no_hp'	=> '088983210303',
	 			'password' => Hash::make('123123')
 			]
 		]);
    }
}
