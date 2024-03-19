<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\PatientsRepositoryInterface;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private $patients;
    public function __construct(PatientsRepositoryInterface $patients)
    {
        $this->patients = $patients;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->patients->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->patients->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->patients->store($request);
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
        return $this->patients->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->patients->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->patients->destroy($id);
    }
}
