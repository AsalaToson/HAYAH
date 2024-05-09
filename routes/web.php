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
use App\Http\Controllers\Mother\MotherPagesController;
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
    Route::get('/record/create', [RecordController::class,'createRecord']);
    Route::post('/record/store', [RecordController::class,'store'])->name("record.store");
    Route::get('download/record/{id}', [RecordController::class,'downloadPdf'])->name("record.pdf");
    Route::post('/laboratory/store', [LabController::class,'store'])->name("laboratory.store");
    Route::resource('records',RecordController::class);
    Route::get('/record/show/{id}', [RecordController::class, 'show'])->name('record.show');
    Route::get('/record/show/{id}', [RecordController::class, 'showLast'])->name('lRecord.show');
    Route::get('/search', [AppointmentController::class,'search']);
    Route::get('/search', [RecordController::class,'search']);
    Route::get('/patients', [DoctorPatientsController::class,'index'])->name('patients.index');

});
/************************** Public Views For mother*********************/
Route::prefix("mother/")->name("mother.")->group(function (){
    Route::get("login" , [MotherController::class , "showLoginForm"])->name("login");
    Route::post("login" , [MotherController::class , "login"])->name("login");
});
////*********n********************mother permissions***********************/

Route::middleware('auth:mother')->group(function () {
    Route::get('/profile/show/{id}', [MotherProfileController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile/edit', [MotherProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update',[MotherProfileController::class,'updateProfile'])->name('profile.update');
    Route::get('download/record/{id}', [MotherRecordController::class,'downloadPdf'])->name("record.pdf");
    Route::get('show/record/{id}', [MotherRecordController::class,'show'])->name("record.show");
    Route::put('appointments/approval/{id}',[MotherAppointmentController::class,'approval'])->name('appointments.approval');
    Route::get('appointments/approval',[MotherAppointmentController::class,'index2'])->name('appointments.index2');
    Route::resource('records',MotherRecordController::class,);

    Route::get('/service/show/{id}', [MotherPagesController::class, 'service'])->name('service.show');
    Route::get('/appointment/show/{id}', [MotherPagesController::class, 'appointment'])->name('appointment.show');
    Route::get('/contactus/show/{id}', [MotherPagesController::class, 'contactus'])->name('contactus.show');
    Route::get('/doctor/show/{id}', [MotherPagesController::class, 'doctor_profile'])->name('doctor.show');
    Route::get('/doctors/show/{id}', [MotherPagesController::class, 'doctors'])->name('doctors.show');
    Route::get('/department/show/{id}', [MotherPagesController::class, ' departments'])->name('departments.show');

});





/************************** End Public Views *********************/

require __DIR__.'/auth.php';
