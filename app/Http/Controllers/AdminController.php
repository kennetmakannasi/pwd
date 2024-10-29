<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\User;

class AdminController extends Controller
{
    public function datacount(){
        $usercount = User::count();
        $bookcount = book::count();
        return view('admin.dashboard',['usercount'=>$usercount , 'bookcount'=>$bookcount]);
    }

    public function userdata(){
        $user = user::all();
        return view('admin.userdata',['user'=>$user]);
    }
}
