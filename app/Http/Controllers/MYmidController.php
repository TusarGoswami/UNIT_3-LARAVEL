<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MYmidController extends Controller
{
    public function __construct(){
        $this->middleware('agefactor');
    }
    public function dashboard(){
        return "HI this is the dashboard page";
    }
    public function admin(){
        return "HI this is admin page";
    }
    
}
