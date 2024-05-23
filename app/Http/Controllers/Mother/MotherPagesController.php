<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Models\doctor;
use App\Models\mother;
use App\Models\section;
use Illuminate\Http\Request;

class MotherPagesController extends Controller
{

    public function service($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =mother::find($id);
        return view('mother.dashboard.service.index',compact('mother'));

    }
    public function contactus($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =mother::find($id);
        return view('mother.dashboard.service.contactus',compact('mother'));

    }
    public function appointment($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =mother::find($id);
        return view('mother.dashboard.service.appointment',compact('mother'));

    }
    public function departments($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother =mother::find($id);
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
        $mother =mother::find($id);
        $doctors =doctor::all();
        return view('mother.dashboard.service.doctors',compact('mother','doctors'));

    }


}
