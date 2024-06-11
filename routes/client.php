<?php

use Trand\Lesson8OopBasic\Controllers\Client\ProductController;
use Trand\Lesson8OopBasic\Controllers\Client\AuthController;
use Trand\Lesson8OopBasic\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');

$router->get( '/products',          ProductController::class    . '@index');
$router->get( '/products/{id}',     ProductController::class    . '@detail');

$router->get( '/auth/login',            AuthController::class . '@showFormLogin');
$router->post( '/auth/handle-login',    AuthController::class . '@login');
$router->get( '/auth/logout',           AuthController::class . '@logout');