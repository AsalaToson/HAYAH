<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\Auth\DoctorLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class DoctorAuthController extends Controller
{
    public function create(): View|Application|Factory
    {
        return view('doctor.auth.login');
    }


    public function store(DoctorLoginRequest $request): RedirectResponse
    {

        try {
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::DOCTOR);
        } catch (ValidationException $e) {
            return back()->withErrors([
                'email' => __('auth.failed'),
            ])->withInput($request->only('email'));
        }

    }


    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('doctor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login/page');
    }
}
