<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\insertcontroller;
use App\Http\Controllers\citizenController;
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
    return view('index');
});



  
//Route::get("insertcontroller",[insertcontroller::class,"adduser"]);

Route::resource('citizens',citizenController::class);
Route::get('login',[citizenController::class,'login']);

