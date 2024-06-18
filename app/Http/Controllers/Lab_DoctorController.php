<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\lab_doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lab_DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lab_doctors = lab_doctor::all();
        return view('admin.dashboard.all_lab_doctors', compact('lab_doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lab_doctors = lab_doctor::all();
        return view('admin.dashboard.add_lab_doctors', compact('lab_doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $lab_doctors = new lab_doctor();
            $lab_doctors->email = $request->email;
            $lab_doctors->name = $request->name;
            $lab_doctors->phone = $request->phone;
            $lab_doctors->age = $request->age;
            $lab_doctors->experience = $request->experience;
            $lab_doctors->password = $request->password;
            $lab_doctors->gender = $request->gender;
            $lab_doctors->address = $request->address;
            $lab_doctors->image = $request->image;
            $lab_doctors->save();


            //Upload img
            //$this->verifyAndStoreImage($request, 'image', 'admins', 'upload_image', $admins->id, 'App\Models\admin');

            DB::commit();
            session()->flash('add');
            return redirect()->route('lab_doctors.index');


        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lab_doctors = lab_doctor::findorfail($id);
        return view('admin.dashboard.edit_lab_doctors',compact('lab_doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lab_doctors = lab_doctor::findorfail($id);
        $lab_doctors->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'age' => $request->input('age'),
            'experience' => $request->input('experience'),
            'password' => $request->input('password'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'image' => $request->input('image'),



        ]);



        return redirect()->route('lab_doctors.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lab_doctors = lab_doctor::findOrFail($id);
        $lab_doctors->delete();

        return redirect()->route('lab_doctors.index');
    }
}
