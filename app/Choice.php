<?php

namespace Menelik;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    /*Attributes*/
    protected $table = 'choices';

    protected $fillable = ['national_exam_id', 'has_fig', 'cnumber', 'choice'];

    /*Model Relationships*/
    public function nationalExam()
    {
    	return $this->belongsTo('Menelik\nationalExam');
    }

    public function figures()
    {
    	return $this->morphMany('Menelik\Figur', 'figurable');
    }
}
