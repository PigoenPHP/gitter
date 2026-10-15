<?php

declare(strict_types=1);

namespace App\Middleware;

class AuthMiddleware
{
    public function index()
    {
        return 'Auth Middleware';
    }
}