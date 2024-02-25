<?php

namespace App\Services ;
use App\Http\Requests\MotherLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait MotherAuthService
{
    public function login(MotherLoginRequest $request)
    {
        $valid_Data = $request->validated();

    }
}

/*
 * Post METHOD
 * http method -> For Posting data into database |
 *
 *
 * **/
