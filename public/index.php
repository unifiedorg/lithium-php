<?php
// School blog with my terrible PHP framework!!!!
require_once dirname(__DIR__, 1) . "/vendor/autoload.php";

$logger = new \Unified\Lithium\Logger\Logger('');

require dirname(__DIR__, 1) . '/app/config/app.php';
require dirname(__DIR__, 1) . '/app/config/db.php';

$router = new \Unified\Lithium\Router\RouteHandler();
require dirname(__DIR__, 1) . '/app/routes/web.php';
$router->setMVCCNamespace('\\App\\Controllers\\Api');
require dirname(__DIR__, 1) . '/app/routes/api.php';

// Handle the current request
$method = $_SERVER['REQUEST_METHOD'];
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handle($method, $url);
