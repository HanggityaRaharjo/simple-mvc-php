<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/handler/Request.php';
function require_all_files($directory)
{
    foreach (glob("$directory/*.php") as $filename) {
        require_once $filename;
    }
}
require_all_files('controller');

use \Handler\Request;
use \Controller\ProductController;
use \Controller\CarController;


$request = new Request();
$router = new \Bramus\Router\Router();

$router->get('/', function () {
    ProductController::index();
});

$router->post('/', function () use ($request) {
    ProductController::store($request);
});


$router->run();
