<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy_list extends Model
{
    use HasFactory;
    function sellList(){
        return $this->belongsTo('App\Models\Sell_list');
    }
    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
