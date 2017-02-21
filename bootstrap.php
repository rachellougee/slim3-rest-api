<?php

include 'config/db.php';
require 'vendor/autoload.php';

/* Setup Eloquent. */
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher as Dispatcher;
use Illuminate\Container\Container as Container;

$capsule = new Capsule;
$capsule->addConnection([
              "driver"    => "mysql",
              "host"      => $db_host,
              "database"  => $db_name,
              "username"  => $db_user,
              "password"  => $db_pass,
              "charset"   => "utf8",
              "collation" => "utf8_general_ci",
              "prefix"    => ""
       ]);
// Make this Capsule instance available globally
$capsule->setAsGlobal();

// Setup the Eloquent ORM
$capsule->bootEloquent();
