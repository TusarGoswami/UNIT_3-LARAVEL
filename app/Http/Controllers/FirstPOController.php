<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstPOController extends Controller
{
    public function Show(){
    
//     public function display(){
//     $a = 10;
//     $b = 5;

//     return [
//         'addition' => $a + $b,
//         'subtraction' => $a - $b,
//         'multiplication' => $a * $b,
//         'division' => $b != 0 ? $a / $b : "Cannot divide by zero"
//     ];
// }
    $courses = ['PHP', 'Laravel', 'JavaScript', 'Vue.js'];
    return view('first', compact('courses'));
    }
}
