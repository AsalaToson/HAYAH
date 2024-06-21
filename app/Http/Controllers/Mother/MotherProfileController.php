<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\UpdateProfileRequest;
use App\Http\Requests\Mother\UpdateMProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MotherProfileController extends Controller
{
    public function show(){
        $mother = Auth::guard('web')->user();
        return view('mother.dashboard.profile.show' , compact('mother'));
    }


    public function edit()
    {
        $mother = Auth::guard('web')->user();
        return view('mother.dashboard.profile.update' , compact('mother'));
    }


    public function update(UpdateProfileRequest $request){

        $mother = Auth::guard('web')->user();

        $input = $request->except('image');
        if($image=$request->File('image')) {
            $imagePath = 'Dashboard/image/mothers/';
            $profileImage = time() . "." . $image->getClientOriginalExtension();
            $image->move($imagePath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $mother->update($input);

        return redirect()->route('MProfile.show')->with('success' , 'Profile updated successfully');

    }


}
