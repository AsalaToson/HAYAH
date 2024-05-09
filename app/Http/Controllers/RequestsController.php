<?php

namespace App\Http\Controllers;


use App\Models\Analysis_Result;
use App\Models\laboratory;
use App\Models\mother;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function index(){

        $requestsFromDB = laboratory::all();

        return view('lab_doctor.dashboard.all_requests', ['requests' => $requestsFromDB]);

    }


    public function create($id){
        $request = laboratory::find($id);
        return view('lab_doctor.dashboard.upload_test',compact('request'));
    }



    public function store(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        request()->validate([
            'mother_id' => ['required' , 'min:1'],
            'doctor_id' => ['required' , 'min:1'],
            'lab_id' => ['required' , 'min:1'],
            'analysis_name' => ['required' , 'min:3'],
            'photo' => ['required'],
        ]);
        $m_id = request()->mother_id;
        $d_id = request()->doctor_id;
        $l_id = request()->lab_id;
        $a_name = request()->analysis_name;

                // upload photo
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images',$fileName,'public');
        $photoPath = '/storage/'.$path;


        Analysis_Result::create([
            'mother_id' => $m_id,
            'doctor_id' => $d_id,
            'labDoctor_id' => $l_id,
            'analysis_Name' => $a_name,
            'photo' => $photoPath,

        ]);
        return redirect('/requests')->with('success','Analysis Report Added successfully');
    }





}
