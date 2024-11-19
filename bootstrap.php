<?php

use Core\App;
use Core\Container;
use Database\Database;

$config = require 'config/app.php';

$container = new Container();
$container->bind('DB', function () use ($config) {
    $database = new Database($config);
    return $database->connect();
});

App::setContainer($container);