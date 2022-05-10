<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class nuserController extends Controller
{
    //
    function index(){
        //  $collection= Http::get("https://reqres.in/api/users?page=1");
         $collection= Http::get("https://jsonplaceholder.typicode.com/users");
      
    //   return view('newuser', ['collection'=>$collection['data']]);
      return view('newuser', ['collection'=>$collection->json()]);
    }
}
