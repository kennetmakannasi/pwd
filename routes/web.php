<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pwd/index');
});


Route::middleware('auth')->group(function () {
    route::middleware('admin')->group(function(){
        route::get('/admin_dashboard',[AdminController::class,'datacount'])->name('admin.dashboard');
        route::get('/userdata',[AdminController::class, 'userdata'])->name('admin.userdata');
        route::get('/bookdata',[AdminController::class,'bookdata'])->name('admin.bookdata');
        route::get('/addbook',[AdminController::class,'add'])->name('admin.addbook');
        route::post('/addbook',[AdminController::class,'store'])->name('admin.store');
        route::get('/editbook/{book}',[AdminController::class,'editbook'])->name('admin.editbook');
        route::put('/updatebook/{book}',[AdminController::class,'updatebook'])->name('admin.updatebook');
        route::delete('/deletebook/{book}',[AdminController::class,'deletebook'])->name('admin.deletebook');
    });

    Route::get('/home', [BookController::class,'home'])->name('pwd/home');

    Route::get('/book', [BookController::class,'book'])->name('pwd/book');

Route::get('/search', [BookController::class,'search'])->name('pwd.search');
Route::get('/detail/{book}', [BookController::class,'detail'])->name('pwd.detail');
Route::get('/detail/{book}', [BookController::class,'detail2'])->name('pwd.detail');

route::get('/profileedit',[ProfileController::class,'profileedit'])->name('pwd.profileedit');


});

require __DIR__.'/auth.php';
