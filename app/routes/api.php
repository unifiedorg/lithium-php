<?php // Controllers should be in /app/controllers/Api.

$router->addMVCRoute('GET', '/api/echo/(\w+)', "Example@echo");
$router->addRoute('GET', '/api/getAsset/(\w+)/(\w+)', function ($type, $asset) {
    switch($type){
        case "css":
            header("Content-Type: text/css");
            break;
        case "js":
            header("Content-Type: text/javascript");
            break;
        case "json":
            header("Content-Type: application/json");
            break;
        case "img":
        case "png":
            header("Content-Type: image/png");
            echo file_get_contents(dirname(__DIR__, 2) . "/app/assets/$type/$asset.png");
            break;
        case "jpg":
        case "jpeg":
            header("Content-Type: image/jpeg");
            break;
        default:
            header("Content-Type: text/plain");
    }

    if (!file_exists(dirname(__DIR__, 2) . "/app/assets/$type/$asset.$type")) {
        header('HTTP/1.0 404 Not Found');
        echo "{\"code\":\"404\",\"message\":\"No asset at ". dirname(__DIR__, 2) . "/app/assets/$type/$asset.$type" ."\"}";
        die();
    }
    
    echo file_get_contents(dirname(__DIR__, 2) . "/app/assets/$type/$asset.$type");
});
