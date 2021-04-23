<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tranfer extends Model
{
    use HasFactory;
    function fiat(){
        return $this->belongsTo('App\Models\Fiat');
    }
    function sender(){
        return $this->belongsTo('App\Models\User','sender_id');
    }
    function receiver(){
        return $this->belongsTo('App\Models\User','receiver_id');
    }
}
