<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MotherController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//*******************    admin dashboard     *****************
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard.admin');
              //****************************


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//************************   admin auth    *******************************
Route::middleware('auth:admin')->group(function () {
           //**********   admin auth    **********
    Route::resource('sections', SectionController::class);
    Route::get('section', [SectionController::class,'display'])->name("section");
                    //**************
          //***********   admin auth    **********
    Route::resource('doctors', DoctorController::class);
    Route::get('doctor', [DoctorController::class,'display'])->name("doctor");
                   //**************

});
//                   *******************************

/************************** Public Views For mother*********************/
Route::prefix("mother/")->name("mother.")->group(function (){
    Route::get("login" , [MotherController::class , "showLoginForm"])->name("login");
    Route::post("login" , [MotherController::class , "login"])->name("login");
});


/************************** End Public Views *********************/

require __DIR__.'/auth.php';
