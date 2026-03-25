<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstPOController;
use App\Http\Controllers\Invokable123Controller;
use App\Http\Controllers\ResourcePOController;
use App\Http\Controllers\APIPOController;
use App\Http\Controllers\MiddlewarePOController;
use App\Http\Middleware\MiddlewarePO;


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

//Step 1 : Create controler with nay name
//step 2 : write inside the method of controller, sucess middleware is created
//step 3 : import controller inside web.php
//step 4 : Give suitable route for controller method
//step 5 : Create middleware by php artisan make:middleware MiddlewarePO
//step 6 : set condition in the created middleware
//step 7 : register middleware in bootstrap/app.php file
//step 8 : add middleware in route in web.php file
//step 9 : Finally run your url with normal url, then restricted parameter 

Route :: get('/firstpo/display', [FirstPOController::class, 'display']);

Route :: get('/courses', [FirstPOController::class, 'Show']);
Route :: get('/invoking', Invokable123Controller::class);
Route :: get('/invoking1/{id}', [Invokable123Controller::class, '__invoke1']);
Route :: resource('/abc', ResourcePOController::class);
Route :: apiResource('xyz', APIPOController::class);
Route :: get('/firstmiddleware', [MiddlewarePOController::class, 'show'])->middleware('checkingage');
    