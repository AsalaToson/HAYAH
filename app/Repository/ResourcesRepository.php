<?php

namespace App\Repository;

use App\Interface\ResourcesRepositoryInterface;
use App\Models\resource;
use Illuminate\Support\Facades\DB;


class ResourcesRepository implements ResourcesRepositoryInterface
{


    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $resources = resource::all();
        return view('admin.dashboard.all_resources', compact('resources'));
    }


    public function create()
    {

        $resources = resource::all();
        return view('admin.dashboard.add_resources', compact('resources'));
    }

    public function store($request): \Illuminate\Http\RedirectResponse
    {

DB::beginTransaction();

try {
    $resources = new resource();
    $resources->name = $request->name;
    $resources->article_description = $request->article_description;
    $resources->image = $request->image;
    $resources->image_description = $request->image_description;
    $resources->video = $request->video;
    $resources->video_description = $request->video_description;
    $resources->tips_for_husband = $request->tips_for_husband;
    $resources->save();


DB::commit();
session()->flash('add');
return redirect()->route('resources.index');


} catch (\Exception $e) {
    DB::rollback();
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
}
    }


    public function destroy($id): \Illuminate\Http\RedirectResponse
    {

        $resources = resource::find($id);
        $resources->delete();
        return redirect()->route('resources.index');
    }




    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $resources = resource::findorfail($id);
        return view('admin.dashboard.edit_resources',compact('resources'));
    }

    public function update($request,$id)
    {

        $resources = resource::findorfail($id);
        $resources->name = $request->name;
        $resources->article_description = $request->article_description;
        $resources->image = $request->image;
        $resources->image_description = $request->image_description;
        $resources->video = $request->video;
        $resources->video_description = $request->video_description;
        $resources->tips_for_husband = $request->tips_for_husband;
        $resources->save();



        return redirect()->route('resources.index');

    }
}
