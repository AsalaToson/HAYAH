<?php

namespace App\Repository;
use App\Interface\Admins_StaffRepositoryInterface;
use App\Models\admin;
use App\Models\image;
use App\Traits\upload_image_trait;
use Illuminate\Support\Facades\DB;


class Admins_StaffRepository implements Admins_StaffRepositoryInterface
{
    use upload_image_trait;

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $admins = admin::all();
        return view('admin.dashboard.all_admins_staff', compact('admins'));
    }


    public function create()
    {

        $admins = admin::all();
        return view('admin.dashboard.add_admins_staff', compact('admins'));
    }

    public function store($request): \Illuminate\Http\RedirectResponse
    {
        DB::beginTransaction();

        try {
            $admins = new admin();
            $admins->email = $request->email;
            $admins->name = $request->name;
            $admins->phone = $request->phone;
            $admins->age = $request->age;
            $admins->experience = $request->experience;
            $admins->password = $request->password;
            $admins->save();


            //Upload img
            //$this->verifyAndStoreImage($request, 'image', 'admins', 'upload_image', $admins->id, 'App\Models\admin');

            DB::commit();
            session()->flash('add');
            return redirect()->route('admins.index');


        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        //$this->Delete_attachment('upload_image','mothers/'.$request->filename,'$request->id','$request->filename');
        $admins = admin::findorfail($id);
        $admins->delete();
        return redirect()->route('admins.index');
    }


    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $admins = admin::findorfail($id);
        return view('admin.dashboard.edit_admins_staff',compact('admins'));
    }

    public function update($request,$id)
    {


        $admins = admin::findorfail($id);
        $admins->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'age' => $request->input('age'),
            'experience' => $request->input('experience'),
            'password' => $request->input('password'),



        ]);
        //Upload img
        //$this->verifyAndStoreImage($request,'image','mothers','upload_image',$patients->id,'App\Models\mother');



        return redirect()->route('admins.index');

    }

}
