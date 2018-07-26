<?php

namespace App;

use App\Model;

class NPWP extends Model
{
    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }
}
