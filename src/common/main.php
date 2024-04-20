<?php

# Constants
$requires = array("classes", "functions");

foreach ($requires as $r) {
    require_once __DIR__ . "\\$r.php";
}



use function functions\debug;
# debug($bill, true);

// ini_set('max_execution_time', '300');
define('BASE_API_URL', 'https://bewabog782.bsite.net/');

// ENDPOINTS
