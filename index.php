<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use App\Services\DB;
use Symfony\Component\HttpFoundation\Request;

$password = getenv('DB_PASSWORD');
print $password;


// use Dotenv\Exception\InvalidPathException;

// Load all the .env variables
// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// try {
//     $dotenv = Dotenv::create(__DIR__);
//     $dotenv->load();
// } catch (InvalidPathException $e) {
//     // Do something

//     die('grrr');
// }


die('Dot env working?');


// Create the http request
$request = Request::createFromGlobals();


// Connect to postgres datababase
$db = (new DB())->getConnection();

// Load all the api's router data
include_once 'routes/api.php';

return;
