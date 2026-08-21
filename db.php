<?php

$servername = getenv('DB_HOST') ?: 'localhost';
$username   = getenv('DB_USER') ?: 'root';
$password   = getenv('DB_PASSWORD') ?: '';
$db         = getenv('DB_NAME') ?: 'clothes_db';

$con = mysqli_connect($servername, $username, $password, $db);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>