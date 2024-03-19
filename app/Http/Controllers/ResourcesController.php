<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interface\ResourcesRepositoryInterface;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    private $resources;
    public function __construct(ResourcesRepositoryInterface $resources)
    {
        $this->resources = $resources;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->resources->index();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->resources->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->resources->store($request);
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
        return $this->resources->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->resources->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->resources->destroy($id);
    }
}
