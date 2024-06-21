<?php

namespace App\Repository;
use App\Interface\DoctorsRepositoryInterface;
use App\Models\appointment;
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
        return view('admin.dashboard.all_doctors', compact('doctors'));
    }

    public function create()
    {

        $section = section::all();
        $appointments = appointment::all();
        return view('admin.dashboard.add_doctor', compact('section','appointments'));
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



    public function destroy($request): \Illuminate\Http\RedirectResponse
    {
        $this->Delete_attachment('upload_image','doctors/'.$request->filename,'$request->id','$request->filename');
        doctor::destroy($request->id);
        return redirect()->route('doctors.index');
    }



    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $section = section::all();
        $doctor = doctor::findorfail($id);
        return view('admin.dashboard.edit_doctor',compact('section','doctor'));
    }

    public function update($request,$id)
    {
            $doctor = doctor::find($id);
            $doctor->email = $request->email;
            $doctor->name = $request->name;
            $doctor->section_id = $request->section_id;
            $doctor->phone = $request->phone;
            $doctor->age = $request->age;
            $doctor->gender = $request->gender;
            $doctor->details = $request->details;
            $doctor->address = $request->address;
            $doctor->experience = $request->experience;
            $doctor->password = $request->password;
            $doctor->appointment = $request->appointment;
            $doctor->price = $request->price;
            $doctor->save();

            //Upload img
                $this->verifyAndStoreImage($request,'image','doctors','upload_image',$doctor->id,'App\Models\doctor');
            return redirect()->route('doctors.index');

        }

}
