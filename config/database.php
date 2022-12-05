<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'ame');
define('DB_PASS', 'jw112319');
define('DB_NAME', 'fw_db');


// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error){
    die('Connection Failed '. $conn->connect_error);
}


?>