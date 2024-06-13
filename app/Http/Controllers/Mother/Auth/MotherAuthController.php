<?php

namespace App\Http\Controllers\Mother\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mother\Auth\MotherLoginRequest;
use App\Models\doctor;
use App\Models\schedule;
use App\Models\section;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class MotherAuthController extends Controller
{
    public function create(): View|Application|Factory
    {
        return view("mother.auth.login");
    }


    public function store(MotherLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::MOTHER);
    }


    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('mother')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
