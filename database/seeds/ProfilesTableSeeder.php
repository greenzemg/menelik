<?php

use Illuminate\Database\Seeder;
use Menelik\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	$faker = \Faker\Factory::create();
     	$division = ['Regular', 'Extenesion'];
     	$stream   = ['Natural', 'Social'];
     	$region    = ['Tigray', 'Afar', 'Amhara', 'Oromia', 'Addis Ababa', 'Somolia'];

     	foreach(range(1, 55) as $index)
     	{
     		Profile::create(
     			[
     				'user_id'  => $index,
     				'profile_pic' => '/propic/'.$faker->numberBetween(0,4).'.jpg',
					'bio'	   => $faker->paragraph,
					'school'   => $faker->word,
					'division' => $division[$faker->numberBetween(0, 1)],
					'stream'   => $stream[$faker->numberBetween(0, 1)],
					'region'   => $region[$faker->numberBetween(0, 5)]
     			]);
     	}   
    }
}
