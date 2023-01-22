<?php
require "Router.php";

use OurApplication\Controller\PriceController;
use OurApplication\Routing\Router;

Router::get('/', function () {
    echo "welcome Home";
});

Router::get('/hello/world', function () {
    echo "Hello World";
});

Router::get('/greet/(\w+)', function ($name) {
    echo "Hello {$name}";
});

Router::get('/greet/(\w+)/title(\w+)', function ($name, $title) {
    echo "Hello {$title} {$name}";
});

Router::get('/verb', function () {
    echo $_SERVER['REQUEST_METHOD'];
});

Router::post('/verb', function () {
    echo $_SERVER['REQUEST_METHOD'];
});

Router::delete('/verb', function () {
    echo $_SERVER['REQUEST_METHOD'];
});

Router::get('/price', [PriceController::class, 'showPrice']);
Router::get('/price2', "PriceController@showPrice");

Router::cleanup();

//basic Routing system

// Route::get('/', function () {
//     echo "welcome";
// });

// Route::get('/say/{name}', function ($name) {
//     echo "Welcome, {$name}";
// });

// Route::get('/hello/world', 'HelloController@sayHelloWorld');
