<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\DoctorsRepositoryInterface;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private $doctors;
    public function __construct(DoctorsRepositoryInterface $doctors)
    {
        $this->doctors = $doctors;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->doctors->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->doctors->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->doctors->store($request);
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
        return $this->doctors->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->doctors->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $this->doctors->destroy( $request);
    }
}
