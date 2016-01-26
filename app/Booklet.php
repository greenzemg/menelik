<?php

namespace Menelik;

use Illuminate\Database\Eloquent\Model;

class Booklet extends Model
{

	/*Some attributes */
	protected $table = 'booklets';

    protected $fillable = ['booklet_code', 'subject_code', 'nummber_of_items', 'time_allowed', 'year', 'grade', 'subject'];


    /*Model Relationships */

    public function nationalExams()
    {
    	return $this->hasMany('Menelik\NationalExam');
    }

    public function scopeYear($query, $year)
    {
        return $query->where('year', '=', $year);
    }

    public function scopeGrade($query, $grade)
    {
        return $query->whereGrade($grade);
    }

    public function scopeSubject($query, $subject)
    {
        return $query->whereSubject($subject);
    }
}
