<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
