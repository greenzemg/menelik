<?php

namespace Menelik;

use Illuminate\Database\Eloquent\Model;

class NationalExam extends Model
{
    /*Attributes */
    protected $table = 'national_exams';

    protected $fillable = ['booklet_id', 'qnumber', 'has_fig'];

    /*Model Relationships*/
    public function booklet()
    {
        return $this->belongsTo('Menelik\Booklet');
    }
    
    public function choices()
    {
    	return $this->hasMany('Menelik\Choice');
    }

    public function answer()
    {
    	return $this->hasOne('Menelik\Answer');
    }

    public function figures()
    {
    	return $this->morphMany('Menelik\Figure', 'figurable');
    }
}
