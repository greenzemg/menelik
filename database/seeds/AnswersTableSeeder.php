<?php

use Illuminate\Database\Seeder;
use Menelik\Booklet;
use Menelik\NationalExam;
use Menelik\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = \Faker\Factory::create();

       	$booklets = BookLet::all();

        // var_dump(count($booklets->toArray()));
        // var_dump(count($booklets->find(1)->nationalExams));

        $index = 1;
        foreach(range(1, count($booklets->toArray())) as $booklet_id)
        {
        	foreach(range(1, count($booklets->find($booklet_id)->nationalExams->toArray())) as $qnum)
        	{	
        		Answer::create([
    				'national_exam_id' => $index,
    				'has_fig' => $faker->optional($weight = 0.9, $default = true)->randomElement([false]),
    				'answer' => $faker->randomElement(['A', 'B', 'C', 'D']),
    				'choice'  => $faker->sentence,
    				'explanation'=> $faker->text,
    				'hint'      => $faker->optional($weight = 0.5, $default = null)->sentence
    			]);
        		$index++;
        	}
        }
    }
}
