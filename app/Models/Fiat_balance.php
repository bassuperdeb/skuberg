<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiat_balance extends Model
{
    use HasFactory;
    function fiat(){
        return $this->belongsTo('App\Models\Fiat');
    }
    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
