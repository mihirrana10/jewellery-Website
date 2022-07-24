<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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




Route::prefix('/')->group(function(){
    Route::get('', function () {
        return view('pages.index');
    })->middleware('islogin:user');;

    Route::get("login",[AuthController::class,'login'])->middleware('guest:user');
    Route::post('login',[AuthController::class,'authenticate'])->middleware('guest:user');

    Route::get('signup', function () {
        return view('pages.signup');
    })->middleware('guest:user');
    Route::post('signup',[AuthController::class,'signup'])->middleware('guest:user');

    Route::get("/logout",[AuthController::class,'logout'])->middleware('islogin:user');

    Route::get('about', function () {
        return view('pages.about');
    })->middleware('guest:user');

    Route::get('contact', function () {
        return view('pages.contact');
    })->middleware('guest:user');

    Route::get('profile', function () {
        return view('pages.profile');
    })->middleware('guest:user');

});




Route::prefix('/admin')->group(function (){

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->middleware('islogin:admin')->name('admin.dashboard');

    Route::get("login",[AdminAuthController::class,'login'])->middleware('guest:admin');
    Route::post('login',[AdminAuthController::class,'authenticate'])->middleware('guest:admin');


    Route::get('signup', function () {
        return view('admin.signup');
    })->middleware('guest:admin');


    Route::post('signup',[AdminAuthController::class,'signup'])->middleware('guest:admin');

    Route::get("logout",[AdminAuthController::class,'logout'])->middleware('islogin:admin');
    
    // Route::get("addProduct",function(){
    //     return view('admin.pages.addProduct');
    // })->middleware('islogin:admin');

    Route::get("addCategory",function(){
        return view('admin.pages.addCategory');
    })->middleware('islogin:admin');

    Route::get("categoryView",function(){
        return view('admin.pages.categoryView');
    })->middleware('islogin:admin');

    Route::get("usermanagementView",function(){
        return view('admin.pages.usermanagementView');
    })->middleware('islogin:admin');

    Route::get("ordermanagementView",function(){
        return view('admin.pages.ordermanagementView');
    })->middleware('islogin:admin');

    Route::resource('product',ProductController::class);
    
});












