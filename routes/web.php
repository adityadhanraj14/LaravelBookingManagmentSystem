<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webpagecontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Bookingcontroller;





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


//Website route
Route::get('/',[Webpagecontroller::class,'landing'])->name('webpage.view');
Route::get('page/{name}',[Webpagecontroller::class,'viewpage'])->name('webpage.dynamic');

//Authorizaton route
Route::get('login',[Authcontroller::class,'login'])->name('login');
Route::post('login',[Authcontroller::class,'authenticate'])->name('login.authenticate');
Route::get('signup',[Authcontroller::class,'signup'])->name('signup');
Route::post('signup',[Authcontroller::class,'createuser'])->name('signup.create');
Route::get('logout',[Authcontroller::class,'logout'])->name('logout');

//Authenticated routes for user and admin
Route::middleware(['auth'])->group(function(){
    //dashboard route for admin
    Route::get('dashboard/admin',[Usercontroller::class,'adminDashboard'])->name('dashboard.admin');
    //dashboard route for user
    Route::get('dashboard/user',[Usercontroller::class,'userDashboard'])->name('dashboard.user');

    //Booking related routes
    Route::get('booking/all',[Bookingcontroller::class,'index'])->name('booking.all');
    Route::get('booking/my',[Bookingcontroller::class,'userBookings'])->name('booking.my');
    Route::get('booking/add',[Bookingcontroller::class,'add'])->name('booking.add');
    Route::post('booking/save',[Bookingcontroller::class,'save'])->name('booking.save');
    Route::get('booking/{id}',[Bookingcontroller::class,'getBookingsById'])->name('booking.edit');
    Route::post('booking/{id}',[Bookingcontroller::class,'updateBookingsById'])->name('booking.update');
    Route::get('booking/delete/{id}',[Bookingcontroller::class,'viewDelete'])->name('booking.view.delete');
    Route::post('booking/delete/{id}',[Bookingcontroller::class,'delete'])->name('booking.delete');

    //webpage related routes
    Route::get('webpage',[Webpagecontroller::class,'index'])->name('webpage.index');
    Route::get('webpage/add',[Webpagecontroller::class,'add'])->name('webpage.add');
    Route::post('webpage/save',[Webpagecontroller::class,'save'])->name('webpage.save');
    Route::get('webpage/{id}',[Webpagecontroller::class,'edit'])->name('webpage.edit');
    Route::post('webpage/{id}',[Webpagecontroller::class,'update'])->name('webpage.update');
    Route::get('webpage/delete/{id}',[Webpagecontroller::class,'viewDelete'])->name('webpage.view.delete');
    Route::post('webpage/delete/{id}',[Webpagecontroller::class,'delete'])->name('webpage.delete');

    //user related routes
    Route::get('user',[Usercontroller::class,'index'])->name('user');
    Route::get('user/add',[Usercontroller::class,'add'])->name('user.add');
    Route::post('user/save',[Usercontroller::class,'save'])->name('user.save');
    Route::get('user/{id}',[Usercontroller::class,'edit'])->name('user.edit');
    Route::post('user/{id}',[Usercontroller::class,'update'])->name('user.update');
    Route::get('user/delete/{id}',[Usercontroller::class,'viewDelete'])->name('user.view.delete');
    Route::post('user/delete/{id}',[Usercontroller::class,'delete'])->name('user.delete');

    //user profile related routes
    Route::get('profile',[Usercontroller::class,'getProfile'])->name('user.profile.get');
    Route::post('profile',[Usercontroller::class,'saveProfile'])->name('user.profile.save');
});