<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'BRS_CRUD');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$conn) {
    die('Failed to connect!');
}