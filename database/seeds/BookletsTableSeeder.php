<?php

use Illuminate\Database\Seeder;
use Menelik\Booklet;

class BookletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $subject = ['Amharic', 'English', 'Mathematics', 'Phyics', 'Chemistry', 'Biology', 'Civics', 'Geography', 'History'];
        $grade   = [8, 10, 12];

        foreach (range(1997, 1998) as $yearIndex) {
		   		
	   		foreach (range(0, 2) as $gradeIndex) {
	   			
	   			foreach (range(0, 8) as $subjectIndex) {
		        	Booklet::create([
		        		'booklet_code' => $faker->numberBetween(100, 999).''.$faker->randomLetter,
	        			'subject_code' => $faker->numberBetween(10, 100),
	        			'number_of_items' => 60,
	        			'time_allowed' => 90,
		    			'year'    	=> $yearIndex,
		    			'grade'   	=> $grade[$gradeIndex],
		    			'subject' 	=> $subject[$subjectIndex],
		    		]);
		        
			    }
		    }
		}
    }
}
