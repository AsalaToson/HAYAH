<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function index(){
        //$requests = lab::all();
        return view('lab_doctor.dashboard.all_requests');
        //return view('lab_doctor.dashboard.all_requests',['requests' => $requests]);
    }
}
