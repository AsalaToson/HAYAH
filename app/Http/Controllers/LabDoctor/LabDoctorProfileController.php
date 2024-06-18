<?php

namespace App\Http\Controllers\LabDoctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LabDoctorProfileController extends Controller
{
    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $labDoctor = Auth::guard('lab_doctor')->user();
        return view('lab_doctor.profile.show',compact('labDoctor'));
    }

    public function edit(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $labDoctor = Auth::guard('lab_doctor')->user();
        return view('lab_doctor.profile.update', compact('labDoctor'));
    }
    public function update(UpdateProfileRequest $request): \Illuminate\Http\RedirectResponse
    {
        $labDoctor = Auth::guard('lab_doctor')->user();

        $input = $request->except('image');
        if($image=$request->File('image')) {
            $imagePath = 'Dashboard/image/labDoctor/';
            $profileImage = time() . "." . $image->getClientOriginalExtension();
            $image->move($imagePath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $labDoctor->update($input);

        return redirect()->route('profile.show')->with('success' , 'Profile updated successfully');

    }


}
