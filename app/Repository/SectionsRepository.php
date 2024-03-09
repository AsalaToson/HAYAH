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
        return view('admin.dashboard.editsection');
    }
}

