<?php

print "Hello World";

// $conn = "host=192.168.99.101 port=5432 dbname=test user=postgres password=webdevel";
// $db = pg_connect($conn);

// print_r($db);

require 'vendor/autoload.php';

use App\Services\DB;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$key = getenv('APP_KEY');

print "<br/> key = $key";


$db = new DB();
$db->getConnection();
