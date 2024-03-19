<?php



namespace App\Repository;

use App\Interface\SectionsRepositoryInterface;
use App\Models\section;
use Illuminate\Contracts\View\View;


class SectionsRepository implements SectionsRepositoryInterface
{

    public function index(): View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $section=section::all();
        return view('admin.dashboard.section',compact('section'));
    }

    public function create(): View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.dashboard.addsection');
    }
    public function store($request): \Illuminate\Http\RedirectResponse
    {
        section::create([
            'name' => $request->input('name'),
        ]);
        session()->flash('add');
        return redirect()->route('sections.index');
    }

    public function display(): View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.dashboard.edit_section');
    }


    public function destroy($request)
    {
        section::destroy($request->id);
        return redirect()->route('sections.index');
    }


    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $section = section::findorfail($id);
        return view('admin.dashboard.edit_section',compact('section'));
    }


    public function update($request,$id)
    {
        $section = section::findOrFail($request->id);
        $section->update([
            'name' => $request->input('name'),

        ]);
        return redirect()->route('sections.index');
    }
}

