<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Models\doctor;
use App\Models\User;
use App\Models\section;
use Illuminate\Http\Request;

class BrowsePagesController extends Controller
{

    public function service($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =User::find($id);
        return view('mother.dashboard.service.index',compact('mother'));

    }
    public function contactus($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =User::find($id);
        return view('mother.dashboard.service.contactus',compact('mother'));

    }
    public function appointment($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $section = section::all();
        $doctor = doctor::all();
        $mother =User::find($id);
        return view('mother.dashboard.service.appointment',compact('mother','section','doctor'));

    }
    public function departments($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =User::find($id);
        $departments =section::all();
        return view('mother.dashboard.service.departments',compact('departments','mother'));

    }
    public function doctor_profile($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $doctor =doctor::find($id);
        return view('mother.dashboard.service.doctorprofile',compact('doctor'));

    }
    public function doctors($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =User::find($id);
        $doctors =doctor::all();
        return view('mother.dashboard.service.doctors',compact('mother','doctors'));

    }


}
