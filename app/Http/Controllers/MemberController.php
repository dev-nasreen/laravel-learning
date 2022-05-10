<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listMember;
class MemberController extends Controller
{
    //
    function show(){
        //return listMember::all();
        $data= listMember::all();
        return view('list', ['members'=>$data]);
    }
}
