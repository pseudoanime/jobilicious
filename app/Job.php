<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function categories()
    {
        $this->belongsToMany('App\Category');
    }
}
