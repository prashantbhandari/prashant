<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    public $timestamps = false;

    public function city(){
        return $this->belongsTo('App\City');
    }
}
