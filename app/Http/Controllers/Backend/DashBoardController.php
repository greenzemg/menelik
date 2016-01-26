<?php

namespace Menelik\Http\Controllers\Backend;

use Illuminate\Http\Request;

use Menelik\Http\Requests;
use Menelik\Http\Controllers\Backend\BackendController;

class DashBoardController extends BackendController
{
	public function __construct()
	{
		parent::__construct();
	}
   public function getIndex()
   {
        $title = 'Backend DashBoard';
        return view('backend.dashboard.index', compact('title'));
   }
}
