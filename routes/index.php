<?php

use Bramus\Router\Router;

// Create Router instance
$router = new Router();

// Define routes
// Routes Admin
require_once __DIR__ . "/client.php";
// Routes Client
require_once __DIR__ . "/admin.php";

// Run it!
$router->run();
