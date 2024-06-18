<?php

namespace App\Repository;
use App\Interface\PatientsRepositoryInterface;
use App\Models\appointment;
use App\Models\doctor;
use App\Models\image;
use App\Models\mother;
use App\Models\section;
use App\Models\User;
use App\Traits\upload_image_trait;
use Illuminate\Support\Facades\DB;


class PatientsRepository implements PatientsRepositoryInterface
{
    use upload_image_trait;

    public function index()
    {

        $patients = User::all();
        return view('admin.dashboard.all_patients', compact('patients'));
    }


    public function index2()
    {

        $patients = User::all();
        return view('admin.dashboard.all_patients', compact('patients'));
    }



    public function create()
    {

        $patients = User::all();
        return view('admin.dashboard.add_patients', compact('patients'));
    }

    public function store($request): \Illuminate\Http\RedirectResponse
    {
        DB::beginTransaction();

        try {
            $patients = new User();
            $patients->email = $request->email;
            $patients->name = $request->name;
            $patients->phone = $request->phone;
            $patients->age = $request->age;
//            $patients->gender = $request->gender;
            $patients->details = $request->details;
            $patients->address = $request->address;
            $patients->password = $request->password;
            $patients->blood_type = $request->blood_type;
            $patients->surgical_history = $request->surgical_history;
            $patients->allergies = $request->allergies;
            $patients->chronic_diseases = $request->chronic_diseases;
            $patients->save();


            //Upload img
            $this->verifyAndStoreImage($request, 'image', 'mothers', 'upload_image', $patients->id, 'App\Models\User');

            DB::commit();
            session()->flash('add');
            return redirect()->route('patient.index2');


        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

        public function destroy($id): \Illuminate\Http\RedirectResponse
        {
          //$this->Delete_attachment('upload_image','mothers/'.$request->filename,'$request->id','$request->filename');
            $patients = User::find($id);
            $patients->delete();
          return redirect()->route('patient.index2');
    }


    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $patients = User::findorfail($id);
        return view('admin.dashboard.edit_patient',compact('patients'));
    }

    public function update($request,$id)
    {


        $patients = User::findorfail($id);
        $patients->email = $request->email;
        $patients->name = $request->name;
        $patients->phone = $request->phone;
        $patients->age = $request->age;
//        $patients->gender = $request->gender;
        $patients->details = $request->details;
        $patients->address = $request->address;
        $patients->password = $request->password;
        $patients->blood_type = $request->blood_type;
        $patients->surgical_history = $request->surgical_history;
        $patients->allergies = $request->allergies;
        $patients->chronic_diseases = $request->chronic_diseases;
        $patients->save();


        //Upload img
        //$this->verifyAndStoreImage($request,'image','mothers','upload_image',$patients->id,'App\Models\mother');



        return redirect()->route('patient.index2');

    }
}
