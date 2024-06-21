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

        $appointments = Schedule::where('doctor_id',Auth::guard('doctor')->id())->where('type',"Certain")->get();

        return view('doctor.dashboard.appointment.index', compact('appointments'));
    }

    public function month()
    {
        $currentMonth = date('m');
        $appointments = Schedule::whereMonth('appointment', $currentMonth)->where('doctor_id',Auth::guard('doctor')->id())->where('type',"Certain")->get();

        return view('doctor.dashboard.appointment.index', compact('appointments'));
    }

    public function today()
    {
        $currentDate = date('Y-m-d');
        $appointments = Schedule::whereDate('appointment', $currentDate)->where('doctor_id',Auth::guard('doctor')->id())->where('type',"Certain")->get();
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

        $appointments=schedule::where('user_id','like','%'.$request->input('query').'%')->where('type',"Certain")->get();
        return view('doctor.dashboard.appointment.search',compact("appointments"));
    }
}
