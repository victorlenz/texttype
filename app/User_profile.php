<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
