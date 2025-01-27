<?php
session_start();

include_once "router.php";
$router = new Router();


// main Routes
require __DIR__ . '/routes/main_routes.php';
// End of main Routes


// Admin Routes
 require __DIR__ . '/routes/admin_routes.php';
// End of Admin Routes


$router->matchRoute();