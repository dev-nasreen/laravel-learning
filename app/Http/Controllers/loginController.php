<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function getData(Request $req){
        $req -> validate([
            'username' => 'required | max:20',
            'userpass' =>'required | min:5'
        ]);

        return $req ->input();
    }
}
