<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function index($name){
        return "{$name}, Welcome to home page";
    }
   
}
