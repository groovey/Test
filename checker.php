<?php

require 'vendor/autoload.php';
 
use App\Services\DB;
 
// Connect to postgres datababase
$db = (new DB())->getConnection();
 
print "<br/> Connection DB Resource: ";

var_dump($db);
