<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDemoController extends Controller
{
    public function mydisplay(){
        return view('coding');
    }
    // public function details($id){
    //     return "You have signed in with id : ".$id;
    // }
    // public function info($id){
    //     return "Id is given with ".$id;
    // }

}
