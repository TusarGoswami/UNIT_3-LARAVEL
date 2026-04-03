<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstPOController;
use App\Http\Controllers\Invokable123Controller;
use App\Http\Controllers\ResourcePOController;
use App\Http\Controllers\APIPOController;
use App\Http\Controllers\MiddlewarePOController;
use App\Http\Middleware\MiddlewarePO;
use App\Http\Middleware\GlobalPOMiddleware;
use App\Http\Controllers\MYmidController;
use App\Http\Middleware\CM;
use App\Http\Controllers\MyDemoController;



Route::get('/', function () {
    return view('welcome');
});

Route :: get('/firstpo', [FirstPOController::class, 'Show']);
    
//Step 1  : Create your first controller on terminal by php artisan make:controller FirstPOController
// step 2 : open your own controller, and add function to it
//step 3 : import your controller in web.php 
//step 4 : make route for controller
//step 5 : run your url with url provided in route
//Route :: get('/firstpo', [FirstPOController::class, 'Show']); 

/**************===================================******************/

//Step 1 : Create controler with nay name
//step 2 : write inside the method of controller, sucess middleware is created
//step 3 : import controller inside web.php
//step 4 : Give suitable route for controller method
//step 5 : Create middleware by php artisan make:middleware MiddlewarePO
//step 6 : set condition in the created middleware
//step 7 : register middleware in bootstrap/app.php file
//step 8 : add middleware in route in web.php file
//step 9 : Finally run your url with normal url, then restricted parameter 

// Route :: get('/firstpo/display', [FirstPOController::class, 'display']);

// Route :: get('/courses', [FirstPOController::class, 'Show']);
// Route :: get('/invoking', Invokable123Controller::class);
// Route :: get('/invoking1/{id}', [Invokable123Controller::class, '__invoke1']);
// Route :: resource('/abc', ResourcePOController::class);
// Route :: apiResource('xyz', APIPOController::class);
// // Route :: get('/firstmiddleware', [MiddlewarePOController::class, 'show'])->middleware('checkingage');
// Route :: get('/firstmiddleware', [MiddlewarePOController::class, 'show']);

// Route :: get('/dashboard', [MYmidController::class, 'dashboard']);
// Route :: get('/admin', [MYmidController::class, 'admin']);

Route :: view('/login', 'MY_loginpage');
Route :: view('/logout', 'My_logoutpage');


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/group', function () {
    return view('group');
});

//Group Routing with prefix 
// Route :: prefix('223PO') -> controller(MyDemoController::class) -> group(function(){
//     Route :: get('/display', 'display');
//     Route :: get('/details/{id}', 'details');
// });

//Group routing without prefix
Route :: controller (MyDemoController::class) -> group(function(){
    Route :: get('/display', 'display');
    Route :: get('/details/{id}', 'details');
    Route :: get('/info/{id}', 'info');
});

//adding constraints 
// Route :: controller (MyDemoController::class) -> group(function(){
// Route :: get('/display','display');
// Route :: get('/details/{id}', 'details') -> where('id', '[0-9]{5,7}'); // id length 5 to 7 digits kaa hona chai, aur sirf digits hone chahiye, koi alphabet ya special character nahi hona chahiye.

// Route :: get('/details/{id}', 'details') -> whereAlpha('id'); // id me sirf alphabet hone chahiye, koi digit ya special character nahi hona chahiye.
// });

//PHP output
// Route :: get('/223PO', function(){
//     $name = "Tusar";
//     $age = 21;
//     var_dump($name);
//     var_dump($age);
//     // echo "My name is : $name <br>";
// });

//blade template
Route :: get('223PO', function(){
    $age = 28;
    return view('practice', compact('age'));
});

//domain routing 
Route :: domain('admin/localhost') -> group(function(){
    Route :: get('/uvw', function(){
        return "admin found";
    });
    Route :: get('/qrs', function(){
        return "User found";
    });
}); 
//run your url via
//https://admin.localhost:8000/uvw
//https://admin.localhost:8000/qrs


Route :: get('/', function(){
    return view('mypractice');
});
Route :: get('/display/mydisplay/abc/cdr/ref', [MyDemoController::class, 'mydisplay'])-> name('myinfo'); 



Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});