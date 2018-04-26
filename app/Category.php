<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function bils()
    {
        return $this->hasMany('App\Bill');
    }
}
