<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';


    public function document()
    {
        return $this->hasMany('App\Document');
    }
}
