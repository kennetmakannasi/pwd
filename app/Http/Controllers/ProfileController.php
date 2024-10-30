<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    protected function profileedit(){
        $userdata = Auth::user();
        return view('pwd.profileedit',['userdata'=>$userdata]);
    }
}
