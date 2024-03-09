<?php

namespace App\Interface;


interface SectionsRepositoryInterface
{

    public function index();
    public function create();
    public function store($request);

    public function display();




}


