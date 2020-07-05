<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurant;

class Stockpile extends Model
{
    public $timestamps = false;
    
    public function restaurant(){
        return $this->belongsTo('App\Restaurant','restaurant_id');
    }
}
