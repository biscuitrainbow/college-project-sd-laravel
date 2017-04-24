<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}
