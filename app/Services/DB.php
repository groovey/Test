<?php

namespace App\Services;

class DB
{
    private $conn;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $host     = getenv('DB_HOST');
        $port     = getenv('DB_PORT');
        $database = getenv('DB_DATABASE');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');
        
        try {
            $conn = "host=$host port=$port dbname=$database user=$username password=$password";
            return $this->conn = pg_connect($conn);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
