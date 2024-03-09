<?php

namespace App\Interface;


interface DoctorsRepositoryInterface
{

    public function index();

    public function create();

    public function store($request);



}

