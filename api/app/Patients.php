<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    public function appointments()
    {
    	return $this->hasOne('App\Appointments');
    }
}
