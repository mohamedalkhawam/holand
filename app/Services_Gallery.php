<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services_Gallery extends Model
{
    public function services()
    {
        return  $this->belongsTo('App\Services_page');
    }
}
