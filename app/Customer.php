<?php

namespace App;

use App\Model;

class Customer extends Model
{
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
