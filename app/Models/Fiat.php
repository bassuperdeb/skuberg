<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiat extends Model
{
    use HasFactory;
    function sellList(){
        return $this->hasMany('App\Models\Sell_list');
    }
    function tranfer(){
        return $this->hasMany('App\Models\Tranfer');
    }
    function fiatBalance(){
        return $this->hasMany('App\Models\Fiat_balance');
    }
}
