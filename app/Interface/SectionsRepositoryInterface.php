<?php

namespace App\Interface;


interface SectionsRepositoryInterface
{

    public function index();
    public function create();
    public function store($request);

    public function display();

    public function destroy($request);
    public function destroy2($id);

    public function edit($id);

    public function update($request,$id);




}


