<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function show(){

        return view('lab_doctor.dashboard.all_requests');

    }
}
