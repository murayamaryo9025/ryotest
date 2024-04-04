<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ViewController;

Route::middleware('auth')->group(function () {
     Route::get('/', [AuthController::class, 'index']);
}); 
Route::middleware('auth')->group(function () {
     Route::get('/',[AttendanceController::class,'store']);
});
Route::get('/update',[AttendanceController::class,'update'])


/*
--------------------------------------------
web Routes
--------------------------------------------

Here is where you can register web routes for your application. These routes are loaded by the RouteServiceProvider within 　group which contains the "web" middleware group.Now create something great!

*/

