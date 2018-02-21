<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
			'name'		=> 'Vardenis Pavardenis',
			'email'		=> 'vardpavard@gmail.com',
			'password'	=> bcrypt('testpassw1'),
			],
			[
			'name'		=> 'Vard Pavar',
			'email'		=> 'abc@gmail.com',
			'password'	=> bcrypt('testpassw1'),
			],
			[
			'name'		=> 'Vardas Pavarde',
			'email'		=> 'abcd@gmail.com',
			'password'	=> bcrypt('testpassw1'),
			],
		]);
    }
}
