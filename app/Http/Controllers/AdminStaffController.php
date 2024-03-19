<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\Admins_StaffRepositoryInterface;
use Illuminate\Http\Request;

class AdminStaffController extends Controller
{
    private $admins;
    public function __construct(Admins_StaffRepositoryInterface $admins)
    {
        $this->admins = $admins;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->admins->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->admins->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->admins->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->admins->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->admins->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->admins->destroy($id);
    }
}
