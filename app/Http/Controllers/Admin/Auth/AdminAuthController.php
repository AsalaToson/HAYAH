<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\AdminLoginRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function create(): View|Application|Factory
    {
        return view("admin.auth.login");
    }

    public function login(AdminLoginRequest $request)
    {
            dd($request->all());
    }
}
