<?php

namespace Menelik\Http\Controllers;

use Illuminate\Http\Request;

use Menelik\Http\Requests;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$title = "Welcome Home page";
        return view('pages.home.index', compact('title'));
    }

}
