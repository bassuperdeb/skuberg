<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell_list extends Model
{
    use HasFactory;
    function user(){
        return $this->belongsTo('App\Models\User');
    }
    function cypto(){
        return $this->belongsTo('App\Models\Cypto');
    }
    function fiat(){
        return $this->belongsTo('App\Models\Fiat');
    }
    function buyList(){
        return $this->hasMany('App\Models\Buy_list');
    }
}
