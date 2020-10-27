<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    public function cases()
    {
        return  $this->hasMany('App\Services_cases');
    }
}
