<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_mysql_image";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);