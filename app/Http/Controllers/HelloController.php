<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
   public function index($name){
    return view('hello',compact('name'));
   }
}
