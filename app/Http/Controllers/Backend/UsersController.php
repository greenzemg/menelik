<?php

namespace Menelik\Http\Controllers\Backend;

use Menelik\User;

use Illuminate\Http\Request;

use Menelik\Http\Requests\UserStoreFormRequest;
use Menelik\Http\Requests\UserUpdateFormRequest;
use Menelik\Http\Requests\UserDeleteFormRequest;
use Menelik\Http\Controllers\Backend\BackendController;

class UsersController extends BackendController
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->middleware('backend');
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'All Users';
        $users = $this->user->paginate(100);

        return view('backend.users.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $title = 'Adding New user';
        return view('backend.users.create', compact('title', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreFormRequest $request)
    {
        $this->user->create($request->only('firstname', 'lastname', 'username', 'email', 'password'));
        $success = 'User has been created successfully.';
        return redirect(route('backend.users.index'))->with('success', $success);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $title = "Edit user";
        $user = $this->user->findOrFail($id);
        return view('backend.users.edit', compact('user', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateFormRequest $request, $id)
    {
        $user = $this->user->findOrFail($id);
        $user->fill($request->only('firstname', 'lastname', 'username', 'email', 'password'));
        $user->save();

        $success = "User recored has been updated successfully!";
        return redirect(route('backend.users.edit', $user->id))->with('success', $success);
    }


    public function confirm(UserDeleteFormRequest $request, $id)
    {
        $title = "Confirm Deleting User";
        $user = $this->user->findOrFail($id);

        return view('backend.users.confirm', compact('user', 'title'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDeleteFormRequest $request, $id)
    {
        $user = $this->user->findOrFail($id);

        $info = "you have been deleting user";
        
        return redirect()->back()->with('info', $info);
    }
}
