<?php


use App\Http\Controllers\Admin\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;





/*****************************  Admin Public Routes *********************/
Route::prefix("admin/")->name("admin.")->group(function (){
    Route::get("login" , [AdminAuthController::class , "create"])->name("login") ;
    Route::post("login" , [AdminAuthController::class , "login"])->name("login") ;
});
