<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cypto_balance extends Model
{
    use HasFactory;
    function cypto(){
        return $this->belongsTo('App\Models\Cypto');
    }
    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
