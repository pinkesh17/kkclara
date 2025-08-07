<?php


use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;




return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        

        $middleware->alias([
            'htmlMinifier' => App\Http\Middleware\HtmlMinifierMiddleware::class,
            'userSteps' => App\Http\Middleware\UserStepsMiddleware::class,
            'admin' => App\Http\Middleware\AdminMiddleware::class,
            'check.token.expiry' => \App\Http\Middleware\CheckTokenExpiryMiddleware::class,
        ]);


    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (Throwable $e, Request $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                $status = 500;
                $message = 'Server Error';

                if ($e instanceof AuthenticationException) {
                    $status = 401;
                    $message = 'Unauthenticated';
                } elseif ($e instanceof NotFoundHttpException) {
                    $status = 404;
                    $message = 'Page not found';
                } elseif ($e instanceof MethodNotAllowedHttpException) {
                    $status = 405;
                    $message = 'Method not allowed';
                } elseif (method_exists($e, 'getStatusCode')) {
                    $status = $e->getStatusCode();
                    $message = $e->getMessage();
                }

               /* return response()->json([
                    'success' => false,
                    'message' => $message,
                ], $status);*/


                $response = [
                    'success' => false,
                    'message' => $message,
                    'status' => $status,
                ];

                // Add full error info in local environment
                if (app()->isLocal()) {
                    $response['error'] = [
                        'exception' => get_class($e),
                        'message' => $e->getMessage(),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                        'trace' => collect($e->getTrace())->take(5), // limit stack trace depth
                    ];
                }

                return response()->json($response, $status);



            }

            // Default HTML error page for non-API requests
            return null;
        });
    })->create();

/*
    // Default bindings (keep as-is)
    $app->singleton(
        Illuminate\Contracts\Http\Kernel::class,
        App\Http\Kernel::class
    );

    $app->singleton(
        Illuminate\Contracts\Console\Kernel::class,
        App\Console\Kernel::class
    );

    $app->singleton(
        Illuminate\Contracts\Debug\ExceptionHandler::class,
        App\Exceptions\Handler::class
    );

    return $app;
*/
