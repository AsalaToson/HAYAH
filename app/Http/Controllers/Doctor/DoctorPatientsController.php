<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\appointment;
use App\Models\doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorPatientsController extends Controller
{
    //
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $doctorId = Auth::guard('doctor')->id();
        // Retrieve the authenticated doctor's appointments
        $appointments = Appointment::where('doctor_id', $doctorId)->get();
        // Retrieve all patients associated with the doctor's appointments
        $patients = $appointments->pluck('mother');
         return view('doctor.dashboard.patient.index',compact('patients'));

    }
}
