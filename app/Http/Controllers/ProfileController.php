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

    protected function profileupdate(Request $request, User $user){
        $updatedata = $request->validate([
            'name'=>'',
            'email'=>'',
            'fp'=>'image|mimes:jpeg,png,jpg,gif',
        ]);

        if($request->hasfile('fp')){
            $fpOriginalName = $request->file('fp')->getClientOriginalName();
            $fpPath = $request->file('fp')->move('img/fp', $fpOriginalName);
            $updatedata['fp'] = $fpPath;
        };
        
        $user->update($updatedata);

        return redirect(route('pwd/home'));
    }

}