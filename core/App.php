<?php

namespace Core;

use mysqli;

class App
{
    public static $container;

    public static function setContainer(Container $container): void
    {
        self::$container = $container;
    }

    public static function container(): Container
    {
        return self::$container;
    }

    public static function DB(): mysqli
    {
        return self::$container->resolve('DB');
    }
}