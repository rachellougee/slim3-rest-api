<?php

require 'vendor/autoload.php';
include 'bootstrap.php';

use App\Models\Message;


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);


// Define app routes
$app->get('/messages', function ($request, $response, $args) {
    $_message = new Message();
    $messages = $_message->all();
   return $response->withStatus(200)->withJson($messages);
});

$app->get('/get/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

// Run app
$app->run();
