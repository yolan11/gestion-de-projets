<link rel="stylesheet" href="style/main.css">
<?php
require "../vendor/autoload.php";

use App\Controllers\UserController;

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
    $test = "TEST";
    require __DIR__ . '/../ressources/home.php';
});

// map users
$router->map('GET', '/users', UserController::class . '#index');
$router->map('GET', '/user/[i:id]', UserController::class . '#show');

// map projects
$router->map('GET', '/projects', \App\Controllers\ProjectsController::class . '#read');
$router->map('GET', '/projects/[i:id]', \App\Controllers\ProjectsController::class . '#readone');
$router->map('POST', '/projects/create', \App\Controllers\ProjectsController::class . '#create');
$router->map('POST', '/projects/delete/[i:id]', \App\Controllers\ProjectsController::class . '#delete');
$router->map('POST  ', '/projects/update/[i:id]', \App\Controllers\ProjectsController::class . '#update');

// map tasks
$router->map('GET', '/tasks', \App\Controllers\TasksController::class . '#read');

// new user
$router->map('GET', '/user/create', UserController::class . '#create');
$router->map('POST', '/user/store', UserController::class . '#store');
$router->map('POST', '/user/update/[i:id]', UserController::class . '#update');


// delete user
$router->map('POST', '/user/delete/[i:id]', \App\Controllers\UserController::class . '#delete');

// map contact
$router->map( 'GET', '/contact', function() {
    require __DIR__ . '/../ressources/contact.php';
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array( $match['target'], $match['params'] );
    } else {
        list ($controller, $action) = explode('#', $match['target']);

        $instance = new $controller;
        call_user_func_array(array($instance, $action), $match['params']);
    }
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}