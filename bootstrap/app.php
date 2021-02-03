<?php

use App\Services\DB;

// Connect to datababase
$db = new DB();
$conn = $db->getConnection();

include_once 'routes/api.php';

return $conn;
