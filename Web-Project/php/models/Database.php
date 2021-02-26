<?php

class Database
{
    protected $connection;

    private $host = "127.0.0.1";
    private $username = "root";
    private $database = "vinceroDB";
    private $password = "";


    public function __construct() {
        $host = $this->host;
        $database = $this->database;
        $username = $this->username;
        $password = $this->password;

        $connection = new mysqli($host, $username, $password, $database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        $this->connection = $connection;
    }

    public function connection() {
        return $this->connection;
    }

}
