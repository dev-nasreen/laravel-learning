<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\loginController;

Route::get('/', function(){
   
    return view('HomePage');
   // return redirect('about');
});

 Route::view('about', 'AboutPage');
Route::view('contact', 'ContactPage');

//Route::get('about', 'DemoController@index')
// Route::get('/name/{nameValue}', 'DemoController@MyName');
//Route::get('/{name}', [SiteController::class, 'index']);

Route::get('/user', [usersController::class, 'loadView']);

Route::post('/users', [loginController::class, 'getData']);
Route::view('/login', 'Login');
