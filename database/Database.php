<?php

namespace Database;

use mysqli;

class Database
{
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function connect(): mysqli
    {
        $config = $this->config;

        $database = $config['database'];

        $host = $database['host'];
        $username = $database['username'];
        $password = $database['password'];
        $dbname = $database['dbname'];
        $port = $database['port'];

        $conn = new mysqli($host, $username, $password, $dbname,$port);

        if ($conn->connect_error) {
            return ("Connection failed: " . $conn->connect_error);
        }

        echo "Connected successfully";
        return $conn;
    }
}

?>
