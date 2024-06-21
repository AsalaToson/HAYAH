<?php

namespace App\Http\Controllers\Mother;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mother\UpdateMProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MotherProfileController extends Controller
{
    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother = Auth::user();
        return view('mother.dashboard.profile.show',compact('mother'));

    }
    public function edit(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $mother = Auth::user();
        return view('mother.dashboard.profile.update', compact('mother'));
    }

    public function update(UpdateMProfileRequest $request): \Illuminate\Http\RedirectResponse
    {

        $mother = Auth::user();

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
