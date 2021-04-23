<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Sex;
use App\Models\Student;
use App\Models\Cypto;
use App\Models\Fiat_balance;
use App\Models\User;
use App\Models\Payment_method;
use App\Models\Sell_list;

class LogController extends Controller
{
    function index(){
        return Log::with('Sex')->get();
    }
    function balance(){
        return Fiat_balance::with('Fiat','User')->get();
    }
    function users(){
        return User::all();
    }
    function cypto(){
        return Cypto::all();
    }
    function paymentMethod(){
        return Payment_method::all();
    }
    function sellList(){
        return Sell_list::with('User','Cypto','Fiat')->get();
    }
    
}
