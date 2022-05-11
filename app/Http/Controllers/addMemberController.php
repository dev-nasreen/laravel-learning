<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listMember;
class addMemberController extends Controller
{
    //
    function addData(Request $req){
        $member = new listMember;
        $member->Name=$req->Name;
        $member->Email=$req->Email;
        $member->Address=$req->Address;
        $member->save();
        return redirect('list');    }
}
