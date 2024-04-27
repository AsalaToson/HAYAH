<?php

namespace App\Http\Controllers\LabDoctor;

use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('lab_doctor.dashboard.all_requests');

    }
}
