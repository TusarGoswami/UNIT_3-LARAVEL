<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invokable123Controller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return  "HI, I am Invokable Controller";
    }
    //list of accessing the id 
    public function __invoke1(Request $request){
        $users = [
            1 => "Tusar",
            2 => "Sujan",
            3 => "Sujan",
        ];
         $id = $request->id;

        return $users[$id] ?? "User not found";
    }
}
