<?php

use App\Services\Router;
use App\Controllers\Api\v1\CustomerController;

$router = new Router($request);
$router->get('/api/v1/customers', [CustomerController::class, 'index']);

$router->mount();

return $router;
