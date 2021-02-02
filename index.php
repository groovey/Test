<?php

print "Hello World";

$conn = "host=192.168.99.101 port=5432 dbname=test user=postgres password=webdevel";
$db = pg_connect($conn);

print_r($db);
