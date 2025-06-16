<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontnedController extends Controller
{
    public function about(){
        
        return view("frontnedCode.aboutus");
    }

    public function contact(){

    }
}
