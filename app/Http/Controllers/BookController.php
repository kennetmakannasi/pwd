<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function home(){
        $book= book::inRandomOrder()->get();
        return view("pwd/home",["book"=>$book]);
    }
    
    public function slider(){
        $book= book::inRandomOrder()->get();
        return view("components/slider",["book"=>$book]);
    }

    public function detail(book $book){
        return view("pwd/detail",["book"=>$book]);
    }
    public function detail2(book $book){
        return view("pwd/detail",["book"=>$book]);
    }

    public function book(){
        $book= book::inRandomOrder()->get();
        return view("pwd/book",["book"=>$book]);
    }
    
    public function search(request $request){
        $search= $request->search;
        $book= book::where('judul','like', "%$search%" )->get();
            
            if($request->ajax()){
                $search= $request->search;
                $book= book::where('judul','like', "%$search%" )->get();
                $output='';
                if(count($book)>0){
                    $output ='
                        <div>';
                            foreach($book as $row){
                                $output .='
                                <div>
                                <a href="http://pwd.test/detail/'.$row->id.'">'.$row->judul.'</a>
                                </div>
                                ';
                            }
                    $output .= '
                        </div>
                        ';
                }
                else{
                    $output .='No results';
                }
                return $output;
            }
            return view("pwd/hasil",["book"=>$book]);
    }
}