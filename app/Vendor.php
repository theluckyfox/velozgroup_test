<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function bils()
    {
        return $this->hasMany('App\Bill');
    }
}
