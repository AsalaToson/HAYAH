<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother = User::find($id);
        return view('mother.dashboard.service.contactus', compact('mother'));
    }

    public function sendmail(Request $request): \Illuminate\Http\RedirectResponse
    {
        $datalists = [
            'w3lName' => $request->w3name,
            'w3lSender' => $request->w3lSender,
            'w3lMessage' => $request->w3lMessage,
        ];
        Mail::to('walaaheikal44@gmail.com')->send(new ContactMail($datalists));
        return back()->with('message_send', 'your message has been sent successfully');
    }




}
