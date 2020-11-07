<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment_page extends Model
{
     public function reason()
    {
        return  $this->belongsTo('App\Reason');
    }
     public function time()
    {
        return  $this->hasOne('App\Time');
    }
    public function doctor()
    {
        return  $this->belongsTo('App\Doctors');
    }
}
