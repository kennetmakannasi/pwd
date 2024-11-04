<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Session\Middleware\AuthenticateSession;
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
    Route::middleware('admin')->group(function(){
        Route::get('/admin_dashboard',[AdminController::class,'datacount'])->name('admin.dashboard');
        Route::get('/userdata',[AdminController::class, 'userdata'])->name('admin.userdata');
        Route::get('/bookdata',[AdminController::class,'bookdata'])->name('admin.bookdata');
        Route::get('/addbook',[AdminController::class,'add'])->name('admin.addbook');
        Route::post('/addbook',[AdminController::class,'store'])->name('admin.store');
        Route::get('/editbook/{book}',[AdminController::class,'editbook'])->name('admin.editbook');
        Route::put('/updatebook/{book}',[AdminController::class,'updatebook'])->name('admin.updatebook');
        Route::delete('/deletebook/{book}',[AdminController::class,'deletebook'])->name('admin.deletebook');
    });

    Route::middleware('user')->group(function(){
        Route::get('/home', [BookController::class,'home'])->name('pwd/home');

        Route::get('/book', [BookController::class,'book'])->name('pwd/book');
        
        Route::get('/search', [BookController::class,'search'])->name('pwd.search');
        Route::get('/detail/{book}', [BookController::class,'detail'])->name('pwd.detail');
        Route::get('/detail/{book}', [BookController::class,'detail2'])->name('pwd.detail');
        
        Route::get('/profileedit',[ProfileController::class,'profileedit'])->name('pwd.profileedit');
        Route::put('/profileupdate/{user}',[ProfileController::class,'profileupdate'])->name('pwd.profileupdate');
    });
Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

});

require __DIR__.'/auth.php';
