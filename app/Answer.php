<?php

namespace Menelik;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	/*Attributes*/
	protected $table = 'answers';

	protected $fillable = ['national_exam_id', 'has_fig', 'answer', 'explanation', 'hint'];
	
    /*Model Relationship*/
    public function nationalExam()
    {
    	return $this->belongsTo('Menelik\nationalExam');
    }

    public function figures()
    {
    	return $this->morphMany('Menelik\Figur', 'figurable');
    }
}
