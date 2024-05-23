<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mother\UpdateMProfileRequest;
use App\Http\Requests\Mother\UpdateProfileRequest;
use App\Models\mother;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MotherprofileController extends Controller
{
    public function showProfile(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother = Auth::guard('mother')->user();
        return view('mother.dashboard.profile.show',compact('mother'));

    }
    public function editProfile(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother = Auth::guard('mother')->user();
        return view('mother.dashboard.profile.update', compact('mother'));
    }

    public function updateProfile(UpdateMProfileRequest $request): \Illuminate\Http\RedirectResponse
    {

        $mother = Auth::guard('mother')->user();

        $input=$request->except('image');
        // Handle image upload and update if a new image is provided
        if ($image=$request->File('image')) {
            $imagePath = 'Dashboard/image/mothers/';
            $profileImage=time() . "." . $image->getClientOriginalExtension();
            $image->move($imagePath,$profileImage);
            $input['image']="$profileImage";
        }else{
            unset($input['image']);
        }

        $mother->update($input);

        return redirect()->route('MProfile.show')->with('success', 'Profile updated successfully.');
    }
}
