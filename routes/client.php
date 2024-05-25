<?php

use Assignment\Php2News\Controllers\Client\CongNgheController;
use Assignment\Php2News\Controllers\Client\DangKyController;
use Assignment\Php2News\Controllers\Client\DangNhapController;
use Assignment\Php2News\Controllers\Client\GioiThieuController;
use Assignment\Php2News\Controllers\Client\HomeController;
use Assignment\Php2News\Controllers\Client\QuenMatKhauController;
use Assignment\Php2News\Controllers\Client\TheThaoController;
use Assignment\Php2News\Controllers\Client\ThoiSuController;


$router->mount('', function () use ($router) {

    $router->get("/"            ,       HomeController::class           .  "@index"     );
    $router->get("thoisu"       ,       ThoiSuController::class         .  "@thoiSu"    );
    $router->get("thethao"      ,       TheThaoController::class        .  "@theThao"   );
    $router->get("congnghe"     ,       CongNgheController::class       .  "@congNghe"  );
    $router->get("gioithieu"    ,       GioiThieuController::class      .  "@gioiThieu" );
    $router->get("dangky"       ,       DangKyController::class         .  "@dangKy" );
    $router->get("dangnhap"     ,       DangNhapController::class       .  "@dangNhap" );
    $router->get("quenmatkhau"  ,       QuenMatKhauController::class    .  "@quenMatKhau" );
});
