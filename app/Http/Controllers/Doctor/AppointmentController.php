<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $appointments = appointment::all();
        return view('doctor.dashboard.appointment.index',compact('appointments'));
    }
    public function destroy($id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $appointment=appointment::findorFail($id);
        $appointment->delete();
        return view('doctor.dashboard.appointment.index' );
    }

}
