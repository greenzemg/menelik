<?php

namespace Menelik\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;


abstract class BackendController extends BaseController
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function getIndex()
   {
        $title = 'Backend DashBoard';
        return view('backend.dashboard.index', compact('title'));
   }

}
