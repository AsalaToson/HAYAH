<?php

use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Doctor\Auth\DoctorAuthController;
use App\Http\Controllers\LabDoctor\Auth\LabDoctorAuthController;
use App\Http\Controllers\LabDoctor\RequestController;
use App\Http\Controllers\Mother\Auth\MotherAuthController;
use App\Http\Controllers\Mother\Auth\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);


         //*******************    user login     *****************
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login/user', [AuthenticatedSessionController::class, 'store'])->name('login.user');
                         //****************************

    //*******************    admin login     *****************
    Route::get('login/admin' , [AdminAuthController::class , 'create'])->name('admin.login') ;

    Route::post('login/admin', [AdminAuthController::class, 'store'])
        ->name('login.admin');
                        //****************************

           //*******************    doctor login     *****************
    Route::get('login/doctor' , [DoctorAuthController::class , 'create'])->name('doctor.login') ;

    Route::post('login/doctor', [DoctorAuthController::class, 'store'])
        ->name('login.doctor');
                           //****************************

              //*******************    mother login     *****************
//    Route::get('login/user' , [UserAuthController::class , 'create'])->name('user.login') ;
//
//    Route::post('login', [UserAuthController::class, 'store'])
//        ->name('login.user');
                        //****************************

            //*******************    lab_doctor login     *****************
    Route::get('login/lab_doctor' , [LabDoctorAuthController::class , 'create'])->name('lab_doctor.login') ;

    Route::post('login/lab_doctor', [LabDoctorAuthController::class, 'store'])
        ->name('login.lab_doctor');
                        //****************************




    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
