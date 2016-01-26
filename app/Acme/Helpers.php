<?php

namespace Menelik\Acme;

use Menelik\User;
use Menelik\Profile;
use Illuminate\Support\Facades\Auth;

/**
* 
*/
class Helpers
{

	static function  link_to_profile($text = 'Profile')
	{

		return link_to_route('profile', $text, Auth::user()->display_name);
	}

	static function getProfilePic($profile)
	{
		if($profile->profile_pic !== null)
		{
			$src_path = '/storage/users/'.$profile->user_id.'/profilepic/'.$profile->profile_pic;
			return $src_path;
		}else{
			
			return '/images/260x180.gif';
		}

	}
}