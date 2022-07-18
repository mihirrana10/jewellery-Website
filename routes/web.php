<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//admin site





//user site
Route::get('/', function () {
    return view('pages.index');
});

Route::get("/login",[AuthController::class,'login'])->name('login');//user

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/signup', function () {
    return view('pages.signup');
});

Route::post('/signup',[AuthController::class,'signup']);//user
Route::post('/login',[AuthController::class,'authenticate']);//user


Route::get('/profile', function () {
    return view('pages.profile');
});

Route::prefix('admin')->group(function (){

    Route::get('/dashbord', function () {
        return view('admin.dashbord');
    });
    Route::get("/login",[AdminAuthController::class,'login'])->name('login');//admin

    Route::get('/signup', function () {
        return view('admin.signup');
    });
    Route::post('/signup',[AdminAuthController::class,'signup']);
    Route::post('/login',[AdminAuthController::class,'authenticate']);


});



Route::get("/logout",[AuthController::class,'logout']);



