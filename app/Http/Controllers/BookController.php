<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
                            foreach($book->slice(0,4) as $row){
                                $judul = Str::limit($row->judul, '25');
                                $output .='
                                <div class="inline-flex">
                                    <div>
                                        <div>
                                            <img class="w-20 h-32 object-cover rounded-md m-3" src="http://pwd.test/'.$row->sampul.'"/>
                                        </div>
                                    </div>
                                    <div class="text-lg mt-10 ml-3">
                                        <a href="http://pwd.test/detail/'.$row->id.'">'.$judul.'</a>
                                    </div>
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