<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotherLoginRequest;
use App\Services\MotherAuthService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class MotherController extends Controller
{
    use MotherAuthService ;

   public function showLoginForm(): View|Application|Factory
   {
       return view("mother.auth.login");
   }

   public function login(MotherLoginRequest $request)
   {
       
   }
}
