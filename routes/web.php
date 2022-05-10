<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\nuserController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\MemberController;
use App\Models\Post;

Route::get('/', function(){
   
    return view('HomePage');
   // return redirect('about');
});

 Route::view('about', 'AboutPage');
Route::view('contact', 'ContactPage');

//Route::get('about', 'DemoController@index')
// Route::get('/name/{nameValue}', 'DemoController@MyName');
//Route::get('/{name}', [SiteController::class, 'index']);

Route::get('/newuser', [nuserController::class, 'index']);

Route::get('/users', [usersController::class, 'loadView']);

// Route::post('/users', [loginController::class, 'getData']);
Route::view('/login', 'Login');

Route::view('/upload', 'upload');
Route::post('/upload', [uploadController::class, 'index']);

Route::get('/user1', function(Request $request){
    return $request->method();
});

Route::get('/data', function(){
    return Post::all();
});

// Route::view('loginn', 'login1');
Route::post('user', [userAuth::class, 'userLogin']);
Route::view('profile', 'profile');

Route::get('/loginn', function(){
    if(session()->has('user')){
       return redirect('profile');
    }
  return view('/login1');
});
Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
  return redirect('loginn');
});

Route::get('/list', [MemberController::class, 'show']);
