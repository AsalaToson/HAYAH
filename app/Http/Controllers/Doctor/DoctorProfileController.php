<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorProfileController extends Controller
{
    public function showProfile(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $doctor = Auth::guard('doctor')->user();
        return view('doctor.dashboard.profile.show',compact('doctor'));

    }
    public function editProfile(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $doctor = Auth::guard('doctor')->user();
        return view('doctor.dashboard.profile.update', compact('doctor'));
    }
    public function updateProfile(UpdateProfileRequest $request): \Illuminate\Http\RedirectResponse
    {
        $doctor = Auth::guard('doctor')->user();

        $input=$request->except('image');
        if ($image=$request->File('image')) {
            $imagePath = 'Dashboard/image/doctors/';
            $profileImage=time() . "." . $image->getClientOriginalExtension();
            $image->move($imagePath,$profileImage);
            $input['image']="$profileImage";
        }else{
            unset($input['image']);
        }

        $doctor->update($input);

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }


}
