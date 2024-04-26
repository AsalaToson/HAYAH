<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\laboratory;
use Illuminate\Http\Request;

class LabController extends Controller
{
    //
    public function store(Request $request)
    {
//        $request->validate([
//            'description' => 'required|string',
//            'doctor_id' => 'required|exists:doctors,id',
//            'mother_id' => 'required|exists:mothers,id',
//        ]);
         laboratory::create([
             'description'=>$request->input('description'),
             'doctor_id'=>$request->input('doctor_id'),
             'mother_id'=>$request->input('mother_id'),]
    );

        return redirect('/appointments')->with('success', 'Data inserted successfully!');
    }
}
