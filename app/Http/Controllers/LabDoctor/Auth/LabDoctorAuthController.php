<?php

namespace App\Http\Controllers\LabDoctor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LabDoctor\Auth\LabDoctorLoginRequest;
use App\Providers\RouteServiceProvider;


use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LabDoctorAuthController extends Controller
{
    public function create(): View|Application|Factory
    {
        return view('lab_doctor.auth.login');
    }


    public function store(LabDoctorLoginRequest $request) : RedirectResponse{

        //$request->authenticate();
        //$request->session()->regenerate();
        //return redirect()->intended(RouteServiceProvider::LAB_DOCTOR);

        try {
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::LAB_DOCTOR);
        } catch (ValidationException $e) {
            return back()->withErrors([
                'email' => __('auth.failed'),
            ])->withInput($request->only('email'));
        }

    }


    public function destroy(Request $request):RedirectResponse{

        Auth::guard('lab_doctor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login/page');

    }


}
