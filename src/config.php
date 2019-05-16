<?php
// Public & weak password since you wiil not be able to connect me 
define('DB_HOST', 'localhost');
define('DB_NAME', 'tdog');
define('DB_USER', 'tdog');
define('DB_PASS', 'tdog');
define('DB_TIMEZONE', 'Asia/Taipei');
$connection_string = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', DB_HOST, DB_NAME);
$db = new PDO($connection_string, DB_USER, DB_PASS);
