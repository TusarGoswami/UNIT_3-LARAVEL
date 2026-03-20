<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstPOController;
use App\Http\Controllers\Invokable123Controller;


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

Route :: get('/firstpo/display', [FirstPOController::class, 'display']);

Route :: get('/courses', [FirstPOController::class, 'Show']);
Route :: get('/invoking', Invokable123Controller::class);