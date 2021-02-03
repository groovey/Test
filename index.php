<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$request = Request::createFromGlobals();

include_once 'bootstrap/app.php';

return;
