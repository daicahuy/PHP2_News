<?php

use Assignment\Php2News\Controllers\Client\HomeController;
use Assignment\Php2News\Controllers\Client\AuthController;
use Assignment\Php2News\Controllers\Client\DetailCategoryController;
use Assignment\Php2News\Controllers\Client\DetailPostController;

$router->get(   "/"                  ,       HomeController::class              .  "@index");
$router->get(   "/detail-category"   ,       DetailCategoryController::class    .  "@index");
$router->get(   "/detail-post"       ,       DetailPostController::class        .  "@index");


$router->mount( "/auth"              ,       function () use ($router) {

    $router->match('GET|POST'   ,   "/"                 ,       AuthController::class    .  "@logIn");
    $router->match('GET|POST'   ,   "/sign-up"          ,       AuthController::class    .  "@signUp");
    $router->match('GET|POST'   ,   "/forgot-password"  ,       AuthController::class    .  "@forgotPassword");
    $router->match('GET|POST'   ,   "/confirm-token"    ,       AuthController::class    .  "@confirmToken");

});