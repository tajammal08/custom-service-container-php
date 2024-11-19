<?php

namespace Core;

use Exception;

class Container
{
    public $binding = [];

    public function bind($key, $fun)
    {
        $this->binding[$key] = $fun;
    }

    /**
     * @throws Exception
     */
    public function resolve($key)
    {
        if (array_key_exists($key, $this->binding)) {
            return call_user_func($this->binding[$key]);
        }

        throw new Exception("Service {$key} is not bound in the container.");
    }
}