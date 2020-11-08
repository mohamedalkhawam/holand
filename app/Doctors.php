<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    public function cases()
    {
        return  $this->hasMany('App\Services_cases');
    }
    public function appointment()
    {
        return  $this->hasMany('App\Appointment_page');
    }
     public function service()
    {
        return  $this->belongsTo('App\Services_page');
    }
}
