<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\laboratory;
use App\Models\mother;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LabController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'doctor_id' => 'required|exists:doctors,id',
            'mother_id' => 'required|exists:mothers,id',
        ]);
        $input = $request->all();
        $input['doctor_id'] = Auth::guard('doctor')->id();
        laboratory::create($input);

        return redirect('/appointments')->with('success', 'Data inserted successfully!');
    }
}
