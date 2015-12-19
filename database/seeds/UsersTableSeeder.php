<?php

use Illuminate\Database\Seeder;

use Menelik\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
        	'role_id' => 1,
			'username' => 'admin',
			'firstname' => 'Teklit',
			'lastname' => 'Haphtu',
			'email' => 'admin@cron.et',
			'password' => bcrypt('admin'),
			'seen' => true,
			'confirmed' => true
		]);

		User::create([
			'role_id' => 2,
			'username' => 'redac',
			'firstname' => 'Asmelash',
			'lastname' => 'Girma',
			'email' => 'redac@cron.fr',
			'password' => bcrypt('redac'),
			'seen' => true,
			'valid' => true,
			'confirmed' => true
		]);

		User::create([
			'username' => 'walker',
			'email' => 'walkercron.et',
			'firstname' => 'White',
			'lastname' => 'Walker',
			'password' => bcrypt('walker'),
			'role_id' => 3,
			'confirmed' => true
		]);

		User::create([
			'role_id' => 3,
			'username' => 'hacker',
			'firstname' => 'Black',
			'lastname' => 'Hat',
			'email' => 'hacker@cron.et',
			'password' => bcrypt('hacker'),
			'confirmed' => false
		]);

		User::create([
			'role_id' => 3,
			'username' => 'lema',
			'firstname' => 'Samrawit',
			'lastname' => 'Haphtu',
			'email' => 'lema@cron.et',
			'password' => bcrypt('lema'),
			'confirmed' => true
		]);

		$faker = \Faker\Factory::create();

    	foreach (range(1, 50) as $index) {
    		User::create([
				'role_id' => rand(1, 5),
				'username'  => $faker->username,
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt($faker->password),
                'confirmed' => true
			]);		
    	}
    }
}
