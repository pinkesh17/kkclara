<?php


namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler{
    /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $this->shouldReturnJson($request, $exception)
            ? response()->json(['message' => 'Unauthenticated.'], 401)
            : redirect()->guest($exception->redirectTo() ?? route('login'));
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($request->expectsJson() || $request->is('api/*')) {
            return $this->handleApiException($request, $exception);
        }

        return parent::render($request, $exception);
    }

    private function handleApiException($request, Throwable $exception)
    {
        $exception = $this->prepareException($exception);

        if ($exception instanceof AuthenticationException) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        if ($exception instanceof ValidationException) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $exception->errors()
            ], 422);
        }

        if ($exception instanceof ModelNotFoundException) {
            return response()->json(['message' => 'Resource not found.'], 404);
        }

        if ($exception instanceof NotFoundHttpException) {
            return response()->json(['message' => 'Endpoint not found.'], 404);
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json(['message' => 'Method not allowed.'], 405);
        }

        if ($exception instanceof HttpException) {
            return response()->json([
                'message' => $exception->getMessage() ?: 'HTTP error occurred.'
            ], $exception->getStatusCode());
        }

        // Default case for unhandled exceptions
        return response()->json([
            'message' => config('app.debug') ? $exception->getMessage() : 'Server error occurred.',
            'exception' => config('app.debug') ? get_class($exception) : null,
            'trace' => config('app.debug') ? $exception->getTrace() : null,
        ], 500);
    }
}