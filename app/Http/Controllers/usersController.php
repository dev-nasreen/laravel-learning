<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class usersController extends Controller
{
    function loadView(){
        
        // return DB::select("select * from columns");
         return User::all();
    }
}
