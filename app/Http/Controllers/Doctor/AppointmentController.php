<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $doctor = Auth::guard('doctor')->user();
        $appointments = schedule::all();
        return view('doctor.dashboard.appointment.index',compact('appointments'));
    }
    public function month(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $currentMonth = date('m');
        $appointments = schedule::where('date', 'like', '%' . $currentMonth . '%')->get();
        return view('doctor.dashboard.appointment.index', compact('appointments'));
    }

    public function today(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $currentDate = date('Y-m-d');
        $appointments = schedule::where('date', $currentDate)->get();
        return view('doctor.dashboard.appointment.index', compact('appointments'));
    }
    public function destroy($id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $appointment=schedule::findorFail($id);
        $appointment->delete();
        return view('doctor.dashboard.appointment.index' );
    }
    function search(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $appointments=schedule::where('mother_id','like','%'.$request->input('query').'%')->get();
        return view('doctor.dashboard.appointment.search',compact("appointments"));
    }
}
