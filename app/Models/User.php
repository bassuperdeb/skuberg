<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    function sellList(){
        return $this->hasMany('App\Models\Sell_list');
    }
    function buyList(){
        return $this->hasMany('App\Models\Buy_list');
    }
    function tranferSender(){
        return $this->hasMany('App\Models\Tranfer','sender_id');
    }
    function tranferReceiver(){
        return $this->hasMany('App\Models\Tranfer','receiver_id');
    }
    function cyptoBalance(){
        return $this->hasMany('App\Models\Cypto_balance');
    }
    function fiatBalance(){
        return $this->hasMany('App\Models\Fiat_balance');
    }
    function userPayment(){
        return $this->hasMany('App\Models\User_payment');
    }
    
}
