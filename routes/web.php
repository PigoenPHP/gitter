<?php
use App\Controllers\AuthController;
use App\Middleware\AuthMiddleware;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Simple router
switch ($uri) {
    case '/':
    case '/login':
        require __DIR__ . '/../resources/views/auth/login.php';
        break;
    case '/register':
        require __DIR__ . '/../resources/views/auth/register.php';
        break;
    case '/dashboard':
        AuthMiddleware::handle();
        require __DIR__ . '/../resources/views/dashboard/index.php';
        break;
    case '/api/login':
        if ($method === 'POST') {
            (new AuthController())->login();
        }
        break;
    case '/api/register':
        if ($method === 'POST') {
            (new AuthController())->register();
        }
        break;
    case '/api/logout':
        if ($method === 'POST') {
            (new AuthController())->logout();
        }
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
