<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_cases extends Model
{
    public function services()
    {
        return  $this->belongsTo('App\Services_page');
    }
    public function  doctor()
    {
        return $this->belongsTo('App\Doctors');
    }
}
