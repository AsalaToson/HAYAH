<?php

namespace App\Repository;
use App\Interface\DoctorsRepositoryInterface;
use App\Models\doctor;
use App\Models\image;
use App\Models\section;
use App\Traits\upload_image_trait;
use Illuminate\Support\Facades\DB;


class DoctorsRepository implements DoctorsRepositoryInterface
{
    use upload_image_trait;
    public function index()
    {
        $doctors = doctor::all();
        return view('doctor.dashboard.all_doctors', compact('doctors'));
    }

    public function create()
    {

        $section = section::all();
        return view('doctor.dashboard.add_doctor', compact('section'));
    }

    public function store($request): \Illuminate\Http\RedirectResponse
    {
        DB::beginTransaction();

        try {
            $doctors = new Doctor();
            $doctors->email = $request->email;
            $doctors->name = $request->name;
            $doctors->section_id = $request->section_id;
            $doctors->phone = $request->phone;
            $doctors->age = $request->age;
            $doctors->gender = $request->gender;
            $doctors->details = $request->details;
            $doctors->address = $request->address;
            $doctors->experience = $request->experience;
            $doctors->password = $request->password;
            $doctors->appointment = $request->appointment;
            $doctors->price = $request->price;
            $doctors->save();


            //Upload img
            $this->verifyAndStoreImage($request,'image','doctors','upload_image',$doctors->id,'App\Models\doctor');


            DB::commit();
            session()->flash('add');
            return redirect()->route('doctors.index');


        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
