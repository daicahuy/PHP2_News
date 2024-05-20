<?php

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__)->load();

require_once __DIR__ . "/routes/index.php";
