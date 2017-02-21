<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/bootstrap.php';

// Instantiate the app
$settings = require __DIR__ .'/../app/settings.php';
$app = new \Slim\App($settings);

// Register routes
require __DIR__ . '/../app/routes.php';

// Run app
$app->run();
