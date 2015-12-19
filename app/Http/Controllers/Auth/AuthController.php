<?php

namespace Menelik\Http\Controllers\Auth;

use Menelik\Models\User;
use Menelik\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectAfterLogout = route('home');// route('auth.login')
        $this->redirectPath        = route('dash.index');
        $this->middleware('guest', ['except' => 'getLogout']);
    }
}
