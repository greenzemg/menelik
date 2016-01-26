<?php

namespace Menelik\Http\Controllers\NationalExam;

use Illuminate\Http\Request;

use Menelik\Http\Requests;
use Menelik\Http\Controllers\Controller;
use Menelik\NationalExam;
use Menelik\Booklet;

class NationalExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
    	$title = 'National Exam Index';
        return view('nationalexams.index', compact('title'));
    }


    public function getSelect()
    {
    	$title = 'National Exam Select';
    	return view('nationalexams.select', compact('title'));
    }
    
  	public function postSelect(Request $request)
  	{

  		return \Redirect::route('nationalexam.instruction',[ $request->year, $request->grade, $request->subject]);
  	}

  	public function getInstruction(Request $request, $year, $grade, $subject)
  	{
  		$title = 'National Exam Instruction';
  		return view('nationalexams.instruction', compact('title', 'year', 'grade', 'subject'));
  	}

  	public function getShow($year, $grade, $subject)
  	{
  		$title = 'National Exam Booklet';
		$booklet = Booklet::year($year)->grade($grade)->subject($subject)->first(); 
		$nationalexams = NationalExam::where('booklet_id', '=', $booklet->id )->paginate(5);
		//dd($nationalexams);
  		return view('nationalexams.show', compact('title', 'booklet', 'nationalexams'));
  	}

 }
