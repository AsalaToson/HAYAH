<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\SectionsRepositoryInterface;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $sections;
    public function __construct(SectionsRepositoryInterface $sections)
    {
        $this->sections = $sections;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sections->index();
    }

    /**
     * Show add section form for creating a new section.
     */
    public function create()
    {
        return $this->sections->create();
    }

    /**
     * Store a newly created section in storage.
     */
    public function store(Request $request)
    {
        return $this->sections->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show add section form for creating a new section.
     */
    public function display()
    {
        return $this->sections->display();
    }

    /**
     * Show the form for editing the specified section.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
