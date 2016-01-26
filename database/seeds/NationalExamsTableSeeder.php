<?php

use Illuminate\Database\Seeder;
use Menelik\NationalExam;

class NationalExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($bid=1; $bid < 55; $bid++) { 
        	for ($qnum=1; $qnum < 61; $qnum++) { 
        		// var_dump($faker->optional($weight = 0.9, $default = true)->randomElement([false]));
        		NationalExam::create([
        				'booklet_id' => $bid,
        				'qnumber' => $qnum,
        				'question' => $faker->text,
        				'has_fig' => $faker->optional($weight = 0.9, $default = true)->randomElement([false])
        			]);
        	}
        }
    }
}