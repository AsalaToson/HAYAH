<?php

namespace App\Interface;


interface Admins_StaffRepositoryInterface
{

    public function index();

    public function create();

    public function store($request);

    public function destroy($id);

    public function edit($id);

    public function update($request,$id);

}
