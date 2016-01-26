<?php

namespace Menelik\Http\Controllers\User;

use Illuminate\Http\Request;

use Menelik\Http\Requests;
use Menelik\Http\Controllers\Controller;

use Menelik\Profile;
use Menelik\User;
use Gate;



class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Showing All user Profiles';
        return view('users.profile.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::findOrFail($id);

        $title = 'Showing single user profile';
        return view('users.profile.show', compact('title', 'profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Editing profile';
        $profile = Profile::findOrFail($id);

        $this->authorize('editProfileGate', $profile);

        return view('users.profile.edit', compact('title', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProfileUpdateFormRequest $request, $id)
    {
        //validate the inputes

        //check if the user can update
        $profile = Profile::findOrFail($id);
        
        //Get all inputes
        $name = $profile->user->id.'_profile_pic';

        if(\Input::hasfile('profile_pic'))
        {
            $extention = \Input::file('profile_pic')->getClientOriginalExtension();

            $filename = $name.'.'.$extention;

            $destination_path = 'storage/users/'.$profile->user->id.'/profilepic';
            $profile_pic_path = '/'.$destination_path.'/'.$filename;

            $isuploaded = \Input::file('profile_pic')->move($destination_path, $filename);   
        }else{

            $filename = $profile->profile_pic;
        }
        //update profile
        $profile->fill([
                'profile_pic'   => $profile_pic_path,
                'bio'           => $request->bio,
                'region'        => $request->region,
                'school'        => $request->school,
                'division'      => $request->division,
                'stream'        => $request->stream
            ])->save();

        //redirect user to profile show route
        $message = "You have successfully update your profile";
        return \Redirect::route('user.profile.show', \Auth::user()->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
