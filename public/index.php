<?php
require "../vendor/autoload.php";

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
    require __DIR__ . '/../ressources/home.php';
});

$router->map( 'GET', '/contact', function() {
    require __DIR__ . '/../ressources/contact.php';
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}