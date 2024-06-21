<?php

namespace App\Interface;


interface PatientsRepositoryInterface
{

    public function index();
    public function index2();

    public function create();

    public function store($request);

    public function destroy($id);

    public function edit($id);

    public function update($request,$id);



}
