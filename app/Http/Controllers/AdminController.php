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
        $book = book::inRandomOrder()->get();
        return view('admin.dashboard',['usercount'=>$usercount , 'bookcount'=>$bookcount, 'book'=>$book]);
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

    public function editbook(book $book){
        return view('admin.editbook',['book'=>$book]);
    }

    public function updatebook(book $book , Request $request){
        

        $updatedata = $request->validate([
            'judul'=>'',
            'kategori'=>'',
            'sampul'=>'image|mimes:jpeg,png,jpg,gif',
            'file'=>'mimes:pdf',
            'penulis'=>'',
            'previewbg'=>'',
        ]);
        
        if($request->hasfile('sampul')){
            $sampulOriginalName = $request->file('sampul')->getClientOriginalName();
            $sampulPath = $request->file('sampul')->move('img/buku', $sampulOriginalName);
            $updatedata['sampul'] = $sampulPath;
        };

        if($request->hasfile('file')){
            $fileOriginalName = $request->file('file')->getClientOriginalName();
            $filePath = $request->file('file')->move('pdf', $fileOriginalName);
            $updatedata['file'] = $filePath;
        };
        
        $book->update($updatedata);

        return redirect(route('admin.bookdata',));
    }

    public function deletebook(book $book){
        $book->delete();
        return redirect(route('admin.bookdata'));
    }
}
