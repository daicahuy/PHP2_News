<?php

use Assignment\Php2News\Controllers\Client\HomeController;

$router->get("/", HomeController::class . "@index");
