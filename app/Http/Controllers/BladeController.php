<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
  public function index($name="world") {
      $param = [
 'name'=>$name,
 'login'=>false,
 'roots'=>[1,2,3,4,5]
      ];
      return view('about')->with($param);
  }

  public function hello(){
      return view('hello');
  }
}
