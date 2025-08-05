<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\HtmlMinifierMiddleware;
use App\Http\Middleware\UserStepsMiddleware;
use App\Http\Middleware\AdminMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        

        $middleware->alias([
            'htmlMinifier' => HtmlMinifierMiddleware::class,
            'userSteps' => UserStepsMiddleware::class,
            'admin' => AdminMiddleware::class,
            'check.token.expiry' => \App\Http\Middleware\CheckTokenExpiryMiddleware::class,
            
        ]);


    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

