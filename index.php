<?php

session_start();

date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__)->load();

require_once __DIR__ . "/routes/index.php";
