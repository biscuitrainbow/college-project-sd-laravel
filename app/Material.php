<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function condition(){
        return $this->hasMany('App\Condition');
    }
}
