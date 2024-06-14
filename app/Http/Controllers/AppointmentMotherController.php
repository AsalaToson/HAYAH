<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentConfirmation;
use App\Mail\AppointmentUnConfirmation;
use App\Models\doctor;
use App\Models\schedule;
use App\Models\section;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class AppointmentMotherController extends Controller
{
public function index()
{
    $appointments=schedule::all();
    return view('admin.dashboard.all_appointments',compact('appointments'));
}


    /**
     * @throws TwilioException
     * @throws ConfigurationException
     */
    public function approval(Request $request, $id)
{
    $email = 'khaterasala21@gmail.com';
    $name = 'John Doe';
    $appointment = '2024-06-15 14:00:00';


    $appointments=schedule::findorfail($id);
    $appointments->update([
        'type'=>'مؤكد',

    ]);
    Mail::to($appointments->email)->send(new AppointmentConfirmation($appointments->name, $appointments->appointment));




//    $receiverNumber = "+20 11 56269776";
////        $receiverNumber = "+201017553080";
//    $message = "test1";
//
//
//        try {
//    $account_sid = getenv("TWILIO_SID");
//    $auth_token = getenv("TWILIO_TOKEN");
//    $twilio_number = getenv("TWILIO_FROM");
//
//    $client = new Client($account_sid, $auth_token);
//    $client->messages->create($receiverNumber, [
//        'from' => $twilio_number,
//        'body' => $message]);
//
//            dd('SMS Sent Successfully.');
//
//
//
//        } catch (Exception $e) {
//
//            dd("Error: ". $e->getMessage());
//
//        }



    return back();
}
public function display()
{
    $section = section::all();
    $doctor = doctor::all();
    return view('admin.dashboard.add_appointment',compact('section','doctor'));
}


    public function store(Request $request)
    {
        schedule::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'section_id' => $request->input('section_id'),
            'doctor_id' => $request->input('doctor_id'),
            'phone' => $request->input('phone'),
            'appointment' => $request->input('appointment'),
            'notes' => $request->input('notes'),
        ]);
        session()->flash('add');
        return redirect()->route('AppointmentMother.index');
    }


    public function unapproval(Request $request, $id)
    {
        $email = 'khaterasala21@gmail.com';
        $name = 'John Doe';
        $appointment = '2024-06-15 14:00:00';


        $appointments=schedule::findorfail($id);
        $appointments->update([
            'type'=>'غير مؤكد',

        ]);

        Mail::to($appointments->email)->send(new AppointmentUnConfirmation($appointments->name, $appointments->appointment));


//    Mail::to($email)->send(new AppointmentConfirmation);




//        $receiverNumber = "+20 11 56269776";
////        $receiverNumber = "+201017553080";
//        $message = "test1";
//
//
//        try {
//            $account_sid = getenv("TWILIO_SID");
//            $auth_token = getenv("TWILIO_TOKEN");
//            $twilio_number = getenv("TWILIO_FROM");
//
//            $client = new Client($account_sid, $auth_token);
//            $client->messages->create($receiverNumber, [
//                'from' => $twilio_number,
//                'body' => $message]);
//
//            dd('SMS Sent Successfully.');
//
//
//
//        } catch (Exception $e) {
//
//            dd("Error: ". $e->getMessage());
//
//        }

        return back();
    }
}
