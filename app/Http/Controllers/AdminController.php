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

    public function bookdata(){
        $book = book::all();
        return view('admin.bookdata',['book'=>$book]);
    }

    public function add(){
        return view('admin.addbook');
    }

    public function store(Request $request){
        $data = $request->validate([
            'judul'=>'required',
            'kategori'=>'required',
            'sampul'=>'required|image|mimes:jpeg,png,jpg,gif',
            'file'=>'required|mimes:pdf',
            'penulis'=>'required',
            'previewbg'=>'required',
        ]);

        $sampulOriginalName = $request->file('sampul')->getClientOriginalName();
        $sampulPath = $request->file('sampul')->move('img/buku', $sampulOriginalName);
        $data['sampul'] = $sampulPath;

        $fileOriginalName = $request->file('file')->getClientOriginalName();
        $filePath = $request->file('file')->move('pdf', $fileOriginalName);
        $data['file'] = $filePath;

        $adddata = book::create($data);

        return redirect(route('admin.dashboard'));
    }
}
