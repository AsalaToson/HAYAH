<?php



use App\Http\Controllers\Admin_ProfileController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\AdminStaffController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\AppointmentMotherController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Doctor\AppointmentController;
use App\Http\Controllers\Doctor\Auth\DoctorAuthController;
use App\Http\Controllers\Doctor\DoctorPatientsController;
use App\Http\Controllers\Doctor\DoctorProfileController;
use App\Http\Controllers\Doctor\LabController;
use App\Http\Controllers\Doctor\RecordController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Lab_DoctorController;
use App\Http\Controllers\LabDoctor\LabDoctorProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LabDoctor\Auth\LabDoctorAuthController;
use App\Http\Controllers\Mother\Auth\UserAuthController;
use App\Http\Controllers\Mother\MotherAppointmentController;
use App\Http\Controllers\Mother\MotherBabyController;
use App\Http\Controllers\Mother\MotherDoctoreController;
use App\Http\Controllers\Mother\BrowsePagesController;
use App\Http\Controllers\Mother\MotherFamilyController;
use App\Http\Controllers\Mother\MotherPregnancyController;
use App\Http\Controllers\Mother\MotherprofileController;
use App\Http\Controllers\Mother\MotherRecordController;
use App\Http\Controllers\MotherController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SectionController;
use App\Models\doctor;
use App\Models\schedule;
use App\Models\section;
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



Route::get('/home{id?}',[HomeController::class,'index'])->name('home');

//*******************    admin dashboard     *****************
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard.admin');
              //****************************

//*******************    mother dashboard     *****************
Route::get('/mother_dashboard', function () {

    $section = section::all();
    $doctor = doctor::all();
//    $schedule = schedule::all();
    return view('mother_dashboard',compact('section','doctor'));
})->middleware(['auth:web', 'verified'])->name('dashboard.mother');


//****************************

//*******************    doctor dashboard     *****************
Route::get('/doctor_dashboard', function () {
    return view('doctor_dashboard');
})->middleware(['auth:doctor', 'verified'])->name('dashboard.doctor');

//****************************

Route::get('login/user', [AuthenticatedSessionController::class, 'create'])->name('user.login');
Route::post('login/user', [AuthenticatedSessionController::class, 'store'])->name('login.user');

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
    Route::get('download/LTest/{id}', [AnalysisController::class,'downloadPdf'])->name("LTest.pdf");


    Route::get('/all_analysis',[AnalysisController::class,'index'])->name('analysis.index');
    Route::get('/analysis_details/{analysis}',[AnalysisController::class,'show'])->name('details.show');
    Route::delete('/analysis/{analysis}' , [AnalysisController::class , 'destroy'])->name('analysis.destroy');
    Route::delete('/request/{request}' , [AnalysisController::class , 'delete'])->name('request.destroy');

    //profile
    Route::get('/labProfile/show', [LabDoctorProfileController::class, 'show'])->name('labProfile.show');
    Route::get('/labProfile/edit', [LabDoctorProfileController::class, 'edit'])->name('labProfile.edit');
    Route::put('/labProfile/update',[LabDoctorProfileController::class,'update'])->name('labProfile.update');

    Route::post('logout/lab_doctor', [LabDoctorAuthController::class, 'destroy'])->name('logout.lab_doctor');


});

// show login page options for any user

Route::get('login/page',function (){
    return view('options');
})->name('login.page');


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
    Route::delete('/items/{id}', [SectionController::class, 'destroy2'])->name('items.destroy2');
                         //**************
          //***********   for add or edit or show doctors    **********
    Route::resource('doctors', DoctorController::class);
    Route::post('doctor', [DoctorController::class,'destroy'])->name("doctor");
                        //**************
         //***********   for add or edit or show patients    **********
    Route::resource('patients', PatientController::class);
    Route::get('/patient', [PatientController::class,"index2"])->name("patient.index2");
                         //**************
            //***********   for add or edit or show admins    **********
    Route::resource('admins', AdminStaffController::class);
                            //**************
    //***********   for add or edit or show Lab_Doctor    **********
    Route::resource('lab_doctors', Lab_DoctorController::class);
    //**************
           //***********   for add or edit or show resources    **********
    Route::resource('resources', ResourcesController::class);
                            //**************
    //***********   for add or edit or show appointment    **********
    Route::get('/AppointmentMother', [AppointmentMotherController::class,"index"])->name("AppointmentMother.index");
    Route::get('/AppointmentApproval/{id}', [AppointmentMotherController::class,"approval"])->name("AppointmentApproval.approval");
    Route::get('/AppointmentMotherDisplay', [AppointmentMotherController::class,"display"])->name("AppointmentMother.display");
    Route::post('/AppointmentMother/store', [AppointmentMotherController::class,"store"])->name("AppointmentMother.store");
    Route::get('/AppointmentUnpproval/{id}', [AppointmentMotherController::class,"unapproval"])->name("AppointmentApproval.unapproval");
    //**************

    Route::resource('admin profile', Admin_ProfileController::class);
    Route::get('/profile/edit2', [Admin_ProfileController::class, 'edit2'])->name('profile.edit2');
    Route::put('/profile/update2',[Admin_ProfileController::class,'update2'])->name('profile.update2');

    Route::post('logout/admin', [AdminAuthController::class, 'destroy'])->name('logout.admin');


});
//                   *******************************

/******************************doctor permissions***********************/
Route::middleware('auth:doctor')->group(function () {
    Route::get('/appointments', [AppointmentController::class,'index'])->name("appointments.index");
    Route::get('/appointments/month', [AppointmentController::class,'month'])->name('appointments.month');
    Route::get('/appointments/today', [AppointmentController::class,'today'])->name('appointments.today');
    Route::get('/ASearch', [AppointmentController::class,'search']);


    //***********************************to view ,update profile*******************//
    Route::get('/profile/show', [DoctorProfileController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile/edit', [DoctorProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update',[DoctorProfileController::class,'updateProfile'])->name('profile.update');



    //**************************to view report & view, add and download record****************************//
    Route::resource('records',RecordController::class);
    Route::get('/record/create/{id}', [RecordController::class,'create'])->name("record.create");
    Route::get('/record/create', [RecordController::class,'createRecord']);
    Route::post('/record/store', [RecordController::class,'store'])->name("record.store");
    Route::get('download/record/{id}', [RecordController::class,'downloadPdf'])->name("record.pdf");
    Route::get('/record/show/{id}', [RecordController::class, 'show'])->name('record.show');
    Route::get('/record/show/{id}', [RecordController::class, 'showLast'])->name('lRecord.show');
    Route::get('/rsearch', [RecordController::class,'search']);

    //*******************************to view, add wanted test********************/
    Route::post('/laboratory/store', [LabController::class,'store'])->name("laboratory.store");
    Route::get('/tests', [LabController::class,'index'])->name("tests.index");
    Route::get('/tests/month', [LabController::class,'month'])->name("tests.month");
    Route::get('/tests/today', [LabController::class,'today'])->name("tests.today");
    Route::get('/test/show/{id}', [LabController::class,'show'])->name("tests.show");
    Route::get('/test/edit', [LabController::class, 'editTest'])->name('test.edit');
    Route::put('/test/update',[LabController::class,'updateTest'])->name('test.update');
    Route::get('download/Test/{id}', [LabController::class,'downloadPdf'])->name("test.pdf");
    Route::get('/search', [LabController::class,'search']);
//******************************logout*********************************************/
    Route::post('logout/doctor', [DoctorAuthController::class, 'destroy'])->name('logout.doctor');

//    Route::get('/patients', [DoctorPatientsController::class,'index'])->name('patients.index');

});
/************************** Public Views For mother*********************/
Route::prefix("user/")->name("user.")->group(function (){
    Route::get("login" , [MotherController::class , "showLoginForm"])->name("login");
    Route::post("login" , [MotherController::class , "login"])->name("login");
});
////*********n********************mother permissions***********************/


Route::middleware('auth:web')->group(function () {





    Route::get('MProfile/show', [MotherProfileController::class , 'show'])->name('MProfile.show');
    Route::get('/MProfile/edit', [MotherProfileController::class, 'edit'])->name('MProfile.edit');
    Route::put('/MProfile/update',[MotherProfileController::class,'update'])->name('MProfile.update');


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
    Route::post('logout/user', [AuthenticatedSessionController::class, 'destroy'])->name('logout.user');




    Route::post('/MotherAppointment', [MotherAppointmentController::class,"store"])->name("MotherAppointment.store");



//    Route::get('/chatify', [MotherAppointmentController::class, 'chatify'])->name('chatify');
});

/************************** baby *********************/
Route::get('/babyprofile/show', [MotherBabyController::class, 'index'])->name('baby.index');
Route::get('/babybreast/show', [MotherBabyController::class, 'Breast'])->name('baby.Breast');
Route::get('/babycrying/show', [MotherBabyController::class, 'crying'])->name('baby.crying');
Route::get('/babydiapering/show', [MotherBabyController::class, 'diapering'])->name('baby.diapering');
Route::get('/babynewborn/show', [MotherBabyController::class, 'new_born'])->name('baby.new_born');
Route::get('/babyshedule/show', [MotherBabyController::class, 'bschedule'])->name('baby.bschedule');
Route::get('/babyborn/show', [MotherBabyController::class, 'p_born'])->name('baby.p_born');
Route::get('/babytest/show', [MotherBabyController::class, 'btest'])->name('baby.btest');
/************************** pregence *********************/

Route::get('/pregnancy/home', [MotherPregnancyController::class, 'homepregnancy'])->name('pregnancy.home');
Route::get('/pregnancy/weekbyweek', [MotherPregnancyController::class, 'weekbyweek'])->name('pregnancy.weekbyweek');
Route::get('/pregnancy/yourBody', [MotherPregnancyController::class, 'yourBody'])->name('pregnancy.yourBody');
Route::get('/pregnancy/yourbaby', [MotherPregnancyController::class, 'yourbaby'])->name('pregnancy.yourbaby');
Route::get('/pregnancy/diet', [MotherPregnancyController::class, 'diet'])->name('pregnancy.diet');
Route::get('/pregnancy/Your Life', [MotherPregnancyController::class, 'Your_Life'])->name('pregnancy.Your Life');
Route::get('/pregnancy/PreparingForBaby', [MotherPregnancyController::class, 'PreparingForBaby'])->name('pregnancy.PreparingForBaby');
Route::get('/pregnancy/Health', [MotherPregnancyController::class, 'Health'])->name('pregnancy.Health');
Route::get('/pregnancy/trimesters', [MotherPregnancyController::class, 'trimesters'])->name('pregnancy.trimesters');
Route::get('/pregnancy/relation', [MotherPregnancyController::class, 'relation'])->name('pregnancy.relation');

/************************** family *********************/

Route::get('/family/home', [MotherFamilyController::class, 'home'])->name('family.home');
Route::get('/family/Fatherhood', [MotherFamilyController::class, 'Fatherhood'])->name('family.Fatherhood');
Route::get('/family/Holidays', [MotherFamilyController::class, 'Holidays'])->name('family.Holidays');
Route::get('/family/Motherhood', [MotherFamilyController::class, 'Motherhood'])->name('family.Motherhood');
Route::get('/family/Siblings', [MotherFamilyController::class, 'Siblings'])->name('family.Siblings');
Route::get('/family/Staying', [MotherFamilyController::class, 'Staying'])->name('family.Staying');
Route::get('/family/test', [MotherFamilyController::class, 'test'])->name('family.test');





//
//Route::get('/download/{filename}', [FileController::class, 'download'])->name('file.download');

/************************** End Public Views *********************/

require __DIR__.'/auth.php';
