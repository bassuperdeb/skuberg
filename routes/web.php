<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/balance',[LogController::class,'balance']);
Route::get('/users',[LogController::class,'users']);
Route::get('/cypto',[LogController::class,'cypto']);
Route::get('/paymentMethod',[LogController::class,'paymentMethod']);
Route::get('/sellList',[LogController::class,'sellList']);

