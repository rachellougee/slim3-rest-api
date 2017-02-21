<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher as Dispatcher;
use Illuminate\Container\Container as Container;

$capsule = new Capsule;
$settings = require 'settings.php';
$capsule->addConnection($settings['settings']['db']);
// Make this Capsule instance available globally
$capsule->setAsGlobal();

// Setup the Eloquent ORM
$capsule->bootEloquent();
