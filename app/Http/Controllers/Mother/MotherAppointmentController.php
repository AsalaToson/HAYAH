<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentConfirmation;
use App\Models\appointment;
use App\Models\doctor;
use App\Models\schedule;
use App\Models\section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class MotherAppointmentController extends Controller
{
    //


    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        //$appointments = appointment::all();
        $appointments = Appointment::where('type', 'Uncertain')->get();
        return view('Dashboard.appointments.index', compact('appointments'));
    }

    public function index2(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $appointments = Appointment::where('type', 'Certain')->get();
        return view('Dashboard.appointments.index2', compact('appointments'));
    }


    public function approval(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        {
            $appointment = Appointment::findorFail($id);
            $appointment->update([
                'type' => 'Certain',
                'appointment' => $request->appointment
            ]);

            // send email
         Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment->name, $appointment->appointment));

            session()->flash('add');
            return back();
        }
    }



    public function store(Request $request)
    {
        schedule::create([
//            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'user_id' => $request->input('user_id'),
            'section_id' => $request->input('section_id'),
            'doctor_id' => $request->input('doctor_id'),
            'phone' => $request->input('phone'),
            'appointment' => $request->input('appointment'),
            'notes' => $request->input('notes'),
            'time' => $request->input('time'),
        ]);
        session()->flash('add');
        return redirect()->route('dashboard.mother');
    }
}

// public function destroy($id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
// {
//     Appointment::destroy($id);
//     session()->flash('delete');
//   return back();
//}






