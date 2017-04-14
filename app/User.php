<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;
    //
        
    public  function profile()
    {
        return $this->hasOne(User_profile::class);
    }
}
