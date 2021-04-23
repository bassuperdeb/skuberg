<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    use HasFactory;
    function userPayment(){
        return $this->hasMany('App\Models\User_payment');
    }
}
