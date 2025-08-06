<?php

namespace App\Http\Middleware;


class VerifyCsrfToken{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    /*protected $except = [
        'stripe/*',
        'api/webhook',
    ];*/

    protected $except = [
        'api/*'
    ];
}