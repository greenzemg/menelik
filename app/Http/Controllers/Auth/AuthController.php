<?php

namespace Menelik\Http\Controllers\Auth;

use Menelik\User;
use Menelik\Http\Requests\UserStoreFormRequest;
use Menelik\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $user;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->redirectAfterLogout = route('home');// route('auth.login')
        $this->redirectPath        = route('user.dashboard.index');
        $this->middleware('guest', ['except' => 'getLogout']);

        $this->user = $user;
    }   


     /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        $title = 'Registeration Page';
        return view('auth.register', compact('title'));
    }   


    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(UserStoreFormRequest $request)
    {

        \Auth::login($this->user->create($request->only('firstname', 'lastname', 'username', 'email', 'password')));

        return redirect($this->redirectPath());
    }
}
