<?php

use App\Http\Controllers\AdminStaffController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\Doctor\AppointmentController;
use App\Http\Controllers\Doctor\DoctorPatientsController;
use App\Http\Controllers\Doctor\DoctorProfileController;
use App\Http\Controllers\Doctor\LabController;
use App\Http\Controllers\Doctor\RecordController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LabDoctor\RequestController;
use App\Http\Controllers\LabDoctorController;
use App\Http\Controllers\MotherController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\ResourcesController;
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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//*******************    admin dashboard     *****************
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard.admin');
              //****************************

//*******************    mother dashboard     *****************
Route::get('/mother_dashboard', function () {
    return view('mother_dashboard');
})->middleware(['auth:mother', 'verified'])->name('dashboard.mother');
//****************************

//*******************    doctor dashboard     *****************
Route::get('/doctor_dashboard', function () {
    return view('doctor_dashboard');
})->middleware(['auth:doctor', 'verified'])->name('dashboard.doctor');
//****************************

//*******************    lab_doctor dashboard     *****************
Route::get('/lab_doctor_dashboard', function () {
    return view('lab_doctor_dashboard');
})->middleware(['auth:lab_doctor', 'verified'])->name('dashboard.lab_doctor');
//****************************

//********************** LabDoctor Permissions ***************************

Route::middleware('auth:lab_doctor')->group(function (){

    Route::get('/requests',[RequestsController::class,'index'])->name('requests.index');           // show all analysis requests from doctor
    Route::get('/add_analysis',[AnalysisController::class,'index'])->name('add_analysis.index');   // show add analysis result page
    Route::get('all_analysis',[AnalysisController::class,'show'])->name('all_analysis.show');      // show all analysis result
    Route::get('/analysis_details',[AnalysisController::class,'show2'])->name('details.show');     // show details of report

});


//****************************

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//************************   admin dashboard auth    *******************************
Route::middleware('auth:admin')->group(function () {
           //**********   for add or edit or show sections    **********
    Route::resource('sections', SectionController::class);
    Route::get('section', [SectionController::class,'display'])->name("section");
    Route::post('Section', [SectionController::class,'destroy'])->name("Section");
                         //**************
          //***********   for add or edit or show doctors    **********
    Route::resource('doctors', DoctorController::class);
    Route::post('doctor', [DoctorController::class,'destroy'])->name("doctor");
                        //**************
         //***********   for add or edit or show patients    **********
    Route::resource('patients', PatientController::class);
                         //**************
            //***********   for add or edit or show admins    **********
    Route::resource('admins', AdminStaffController::class);
                            //**************
           //***********   for add or edit or show resources    **********
    Route::resource('resources', ResourcesController::class);
                            //**************

});
//                   *******************************

/******************************doctor permissions***********************/
Route::middleware('auth:doctor')->group(function () {
    Route::get('/appointments', [AppointmentController::class,'index'])->name("appointments.index");
    Route::delete('/appointments/delete/{id}', [AppointmentController::class,'destroy'])->name("appointments.destroy");
    Route::get('/profile/show', [DoctorProfileController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile/edit', [DoctorProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update',[DoctorProfileController::class,'updateProfile'])->name('profile.update');
    Route::get('/record/create/{id}', [RecordController::class,'create'])->name("record.create");
    Route::post('/record/store', [RecordController::class,'store'])->name("record.store");
    Route::get('download/record/{id}', [RecordController::class,'downloadPdf'])->name("record.pdf");
    Route::post('/laboratories', [LabController::class,'store'])->name('laboratories.store');
    Route::resource('records',RecordController::class);

    Route::get('/patients', [DoctorPatientsController::class,'index'])->name('patients.index');

});
/************************** Public Views For mother*********************/
Route::prefix("mother/")->name("mother.")->group(function (){
    Route::get("login" , [MotherController::class , "showLoginForm"])->name("login");
    Route::post("login" , [MotherController::class , "login"])->name("login");
});


/************************** End Public Views *********************/

require __DIR__.'/auth.php';
