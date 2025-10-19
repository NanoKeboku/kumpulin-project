<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('homepage');
    }
   
    public function jelajah(){
        return view('jelajahRuang');
    }
   
    public function detail(){
        return view('detailRuang');
    }
    
}


?>