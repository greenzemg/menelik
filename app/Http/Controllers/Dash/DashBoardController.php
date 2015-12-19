<?php

namespace Menelik\Http\Controllers\Dash;

use Illuminate\Http\Request;

use Menelik\Http\Requests;
use Menelik\Http\Controllers\Backend\BackendController;

class DashBoardController extends BackendController
{
   public function getIndex()
   {
        $title = 'DashBoard';
        return view('pages.dashboard.index', compact('title'));
   }

   public function getThem()
   {
        return 'Them';
   }
}
