<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    function loadView(){
        $data = ['anil', 'peter', 'roky', 'sima'];
        return view('users', ['users' =>$data]);
    }
}
