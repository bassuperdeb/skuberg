<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cypto extends Model
{
    use HasFactory;
    function sellList(){
        return $this->hasMany('App\Models\Sell_list');
    }
    function cyptoBalance(){
        return $this->hasMany('App\Models\Cypto_balance');
    }
    
}
