<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request,$id=null)
    {
        $messages=[];
        $otherUser=null;
        if($id){
            $otherUser=User::findorfail($id);
            $group_id=(Auth::id()>$id)?Auth::id().$id:$id.Auth::id();
            $messages=chat::where('group_id',$group_id)->get()->toArray();
        }
        $friends=User::where('id','!=',Auth::id())->get()->toArray();
        return view('dashboard2',compact('friends','messages','otherUser','id'));
    }
}
