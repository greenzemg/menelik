<?php

namespace Menelik;

use Illuminate\Database\Eloquent\Model;

use Menelik\User;

class Profile extends Model
{
    
    protected $table = 'profiles';

    protected $fillable = ['profile_pic', 'bio', 'school', 'division', 'region', 'stream'];

    public function user()
    {
    	return $this->belongsTo('Menelik\User');
    }
}
