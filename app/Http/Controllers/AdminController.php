<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminauth(){
    $user = Auth::user();

    if ($user->admin === 'N') {
        return redirect('/home'); 
    }

    return view('admin.dashboard'); 
}

}
