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
use App\Http\Controllers\Mother\MotherAppointmentController;
use App\Http\Controllers\Mother\MotherDoctoreController;
use App\Http\Controllers\Mother\MotherLabController;
use App\Http\Controllers\Mother\BrowsePagesController;
use App\Http\Controllers\Mother\MotherprofileController;
use App\Http\Controllers\Mother\MotherRecordController;
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
})->middleware(['auth:user', 'verified'])->name('dashboard.mother');
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

    Route::get('/requests',[RequestsController::class,'index'])->name('requests.index');
    Route::get('/add_analysis/{request}' , [RequestsController::class , 'create'])->name('add_analysis.create');
    Route::post('/analysis' , [RequestsController::class , 'store'])->name('analysis.store');


    Route::get('/all_analysis',[AnalysisController::class,'index'])->name('analysis.index');
    Route::get('/analysis_details/{analysis}',[AnalysisController::class,'show'])->name('details.show');
    Route::delete('/analysis/{analysis}' , [AnalysisController::class , 'destroy'])->name('analysis.destroy');
    Route::delete('/request/{request}' , [AnalysisController::class , 'delete'])->name('request.destroy');

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
    Route::get('/appointments/month', [AppointmentController::class,'month'])->name('appointments.month');
    Route::get('/appointments/today', [AppointmentController::class,'today'])->name('appointments.today');
    Route::delete('/appointments/delete/{id}', [AppointmentController::class,'destroy'])->name("appointments.destroy");
    Route::get('/profile/show', [DoctorProfileController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile/edit', [DoctorProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update',[DoctorProfileController::class,'updateProfile'])->name('profile.update');
    Route::get('/record/create/{id}', [RecordController::class,'create'])->name("record.create");
    Route::get('/record/create', [RecordController::class,'createRecord']);
    Route::post('/record/store', [RecordController::class,'store'])->name("record.store");
    Route::get('download/record/{id}', [RecordController::class,'downloadPdf'])->name("record.pdf");
    Route::post('/laboratory/store', [LabController::class,'store'])->name("laboratory.store");
    Route::resource('records',RecordController::class);
    Route::get('/tests', [LabController::class,'index'])->name("tests.index");
    Route::get('/tests/month', [LabController::class,'month'])->name("tests.month");
    Route::get('/tests/today', [LabController::class,'today'])->name("tests.today");
    Route::get('/test/show/{id}', [LabController::class,'show'])->name("tests.show");
    Route::get('/test/edit', [LabController::class, 'editTest'])->name('test.edit');
    Route::put('/test/update',[LabController::class,'updateTest'])->name('test.update');
    Route::get('download/Test/{id}', [LabController::class,'downloadPdf'])->name("test.pdf");
    Route::get('/record/show/{id}', [RecordController::class, 'show'])->name('record.show');
    Route::get('/record/show/{id}', [RecordController::class, 'showLast'])->name('lRecord.show');
    Route::get('/search', [AppointmentController::class,'search']);
    Route::get('/rsearch', [RecordController::class,'search']);
    Route::get('/search', [LabController::class,'search']);
    Route::get('/patients', [DoctorPatientsController::class,'index'])->name('patients.index');

});
/************************** Public Views For mother*********************/
Route::prefix("user/")->name("user.")->group(function (){
    Route::get("login" , [MotherController::class , "showLoginForm"])->name("login");
    Route::post("login" , [MotherController::class , "login"])->name("login");
});
////*********n********************mother permissions***********************/

Route::middleware('auth:user')->group(function () {
    Route::get('/MProfile/show', [MotherProfileController::class, 'showProfile'])->name('MProfile.show');
    Route::get('/MProfile/edit', [MotherProfileController::class, 'editProfile'])->name('MProfile.edit');
    Route::put('/MProfile/update',[MotherProfileController::class,'updateProfile'])->name('MProfile.update');
    Route::get('download/MRecord/{id}', [MotherRecordController::class,'downloadPdf'])->name("MRecord.pdf");
    Route::get('show/record/{id}', [MotherRecordController::class,'show'])->name("record.show");
    Route::put('appointments/approval/{id}',[MotherAppointmentController::class,'approval'])->name('appointments.approval');
    Route::get('appointments/approval',[MotherAppointmentController::class,'index2'])->name('appointments.index2');
    Route::get('/service/show/{id}', [BrowsePagesController::class, 'service'])->name('service.show');
    Route::get('/appointment/show/{id}', [BrowsePagesController::class, 'appointment'])->name('appointment.show');
    Route::get('/contactus/show/{id}', [BrowsePagesController::class, 'contactus'])->name('contactus.show');
    Route::get('/doctor/show/{id}', [BrowsePagesController::class, 'doctor_profile'])->name('doctor.show');
    Route::get('/doctors/show/{id}', [BrowsePagesController::class, 'doctors'])->name('doctors.show');
    Route::get('/department/show/{id}', [BrowsePagesController::class, 'departments'])->name('departments.show');

});





/************************** End Public Views *********************/

require __DIR__.'/auth.php';
