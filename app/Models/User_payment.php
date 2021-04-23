<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_payment extends Model
{
    use HasFactory;
    function user(){
        return $this->belongsTo('App\Models\User');
    }
    function paymentMethod(){
        return $this->belongsTo('App\Models\Payment_method');
    }
    
}
