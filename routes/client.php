<?php

use Assignment\Php2News\Controllers\Client\ChiTietController;
use Assignment\Php2News\Controllers\Client\GioiThieuController;
use Assignment\Php2News\Controllers\Client\HomeController;
use Assignment\Php2News\Controllers\Client\LogInController;
use Assignment\Php2News\Controllers\Client\PageController;



$router->mount('', function () use ($router) {

        $router->get("/",                HomeController::class           .  "@index"     );
        $router->get("/gioithieu",       GioiThieuController::class      .  "@gioiThieu" );
        $router->get("/chitiet",         ChiTietController::class        .  "@chiTiet"   );


    $router->mount("/login", function () use ($router) {
        $router->match('GET|POST', "/dangky",           LogInController::class    .  "@dangKy"      );
        $router->match('GET|POST', "/dangnhap",         LogInController::class    .  "@dangNhap"    );
        $router->match('GET|POST', "/quenmatkhau",      LogInController::class    .  "@quenMatKhau" );
        $router->match('GET|POST', "/xacnhan",          LogInController::class    .  "@xacNhan"     );
    });


    $router->mount("/pages", function () use ($router) {
        $router->get("/thoisu",         PageController::class        .  "@thoiSu"  );
        $router->get("/thethao",        PageController::class        .  "@theThao" );
        $router->get("/congnghe",       PageController::class        .  "@congNghe");
    });
});
