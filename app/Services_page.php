<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services_Gallery;
class Services_page extends Model
{
    public function gallery()
    {
        return  $this->hasMany('App\Services_Gallery');
    }
    public function cases()
    {
        return  $this->hasMany('App\Services_cases','service_id');
    }
}
