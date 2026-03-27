<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\MiddlewarePO;
use App\Http\Middleware\GlobalPOMiddleware;
use App\Http\Middleware\CM;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //First step is to register middleware in this function
        // $middleware->alias(
        // [
        //     'checkingage' => \App\Http\Middleware\MiddlewarePO::class,
        // ]
        // );

        // $middleware->alias(
        // [
        //     'agefactor' => \App\Http\Middleware\CM::class,
        // ]
        // );
        
        //Register global middleware here
        // $middleware->append(
        //     \App\Http\Middleware\GlobalPOMiddleware::class
        // );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
