<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\appointment;
use App\Models\mother;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $appointments = appointment::all();
        return view('doctor.dashboard.appointment.index',compact('appointments'));
    }
    public function month()
    {
        $currentMonth = date('m');
        $appointments = appointment::where('date', 'like', '%' . $currentMonth . '%')->get();
        return view('doctor.dashboard.appointment.index', compact('appointments'));
    }

    public function today()
    {
        $currentDate = date('Y-m-d');
        $appointments = appointment::where('date', $currentDate)->get();
        return view('doctor.dashboard.appointment.index', compact('appointments'));
    }
    public function destroy($id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $appointment=appointment::findorFail($id);
        $appointment->delete();
        return view('doctor.dashboard.appointment.index' );
    }
    function search(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $appointments=appointment::where('mother_id','like','%'.$request->input('query').'%')->get();
        return view('doctor.dashboard.appointment.search',compact("appointments"));
    }
}
