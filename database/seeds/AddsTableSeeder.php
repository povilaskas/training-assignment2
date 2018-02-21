<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class AddsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('adds')->insert([
			[
				'post_date'			=> Carbon::parse('2018-02-10'),
				'title'				=> 'Mekk Poggio Full carbon frame road bike',
				'description'		=> 'Mekk Poggio carbon road bike, 18 speed Sora gearing, in perfect condition, new rear mech, recently serviced! Viewings welcome £550ono',
				'name_id'			=> '1'
			],
			[
				'post_date'			=> Carbon::parse('2018-02-11'),
				'title'				=> 'Kona Paddy Wagon fixed gear / single speed',
				'description'		=> 'Size 56cm, suitable for 173-185cm height. Reynolds 520 cromoly frame, Kona cromoly fork, Halo Mercury rims, Charge spoon saddle, brand new Schwalbe Marathon Plus tyres cost £48',
				'name_id'			=> '1'
			],
			[
				'post_date'			=> Carbon::parse('2018-02-11'),
				'title'				=> 'Trek mountain bike G2 Advance 26',
				'description'		=> '10/10 kept inside, no rust perfect condition. Lights and power lock included( worth~100£) 300 £ ono collectin only. No time wasters!',
				'name_id'			=> '2'
			],
			[
				'post_date'			=> Carbon::parse('2018-02-12'),
				'title'				=> 'Incline Mountain bike',
				'description'		=> '19.5” size Mtb. Great condition with light use. ',
				'name_id'			=> '3'
			],
		]);
    }
}
