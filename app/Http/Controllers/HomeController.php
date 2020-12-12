<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(){
        $this->middleware('after');
        $this->middleware('before')->except('profile');
    }
    public function index(){

return "This is the index method";
    }

    public function profile(){

        return "This is the profile method";
    }
    public function brand(){

        return "This is the brand method";
    }
}
